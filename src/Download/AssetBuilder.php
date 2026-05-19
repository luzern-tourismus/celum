<?php

namespace LuzernTourismus\Celum\Download;

use LuzernTourismus\Celum\Data\Asset\Asset;
use LuzernTourismus\Celum\Data\AssetCollection\AssetCollection;
use LuzernTourismus\Celum\Data\AssetCollectionPath\AssetCollectionPath;
use LuzernTourismus\Celum\Data\AssetCollectionPathSegment\AssetCollectionPathSegment;
use LuzernTourismus\Celum\Directory\FileExtensionDirectory;
use LuzernTourismus\Celum\Path\CelumJsonPath;
use Nemundo\Core\Base\AbstractBase;
use Nemundo\Core\Debug\Debug;
use Nemundo\Core\Json\Reader\JsonReader;
use Nemundo\Core\TextFile\Reader\TextFileReader;

class AssetBuilder extends AbstractBase
{

    /**
     * @var FileExtensionDirectory
     */
    private $fileExtensionDirectory;

    public function build($assetId)
    {


        $this->fileExtensionDirectory = new FileExtensionDirectory();

        (new CelumJsonPath())->createPath();


        //$assetId = $json['id'];

        //(new Debug())->write($assetId);

        /*$filename = (new CelumJsonPath())
            ->addPath($assetId . '.json')
            ->getFullFilename();

        if ((new File($filename))->fileNotExists()) {
        }*/

        $filename = (new JsonDownload())->downloadJson($assetId);


         //$url = 'https://content.luzern.com/content-api/v1/assets/' . $assetId;

        /*$request = new CelumWebRequest();
        $response = $request->getUrl($url);


        $file = new TextFileWriter($filename);
        $file->overwriteExistingFile = true;
        $file->addLine($response->html);
        $file->writeFile();

        $jsonReader = new JsonReader();
        $jsonReader->fromText($response->html);
        $jsonData = $jsonReader->getData();*/


        $jsonReader = new JsonReader();
        $jsonReader->fromText((new TextFileReader($filename))->getText());
        $jsonData = $jsonReader->getData();

        $asset = $jsonData['name'];
        $fileExtension = $jsonData['currentVersion']['fileExtension'];

        $description = '';
        $caption = '';
        $creator = '';

        if (isset($jsonData['informationFieldValueSets'])) {
            foreach ($jsonData['informationFieldValueSets'] as $fieldValue) {

                foreach ($fieldValue['informationFieldValues'] as $field) {

                    $name = $field['field']['name'];

                    if ($name === 'description') {
                        if (isset($field['value'])) {
                            if (isset($field['value']['de'])) {
                                $description = $field['value']['de'];
                            }
                        }
                    }

                    if ($name === 'caption') {
                        if (isset($field['value'])) {
                            if (isset($field['value']['de'])) {
                                $caption = $field['value']['de'];
                            }
                        }
                    }

                    if ($name === 'creator') {
                        if (isset($field['value'])) {
                            if (isset($field['value']['de'])) {
                                $creator = $field['value']['de'];
                            }
                        }
                    }

                }

            }

        }

        $data = new Asset();
        $data->updateOnDuplicate = true;
        $data->id = $assetId;
        $data->name = $asset;
        $data->description = $description;
        $data->caption = $caption;
        $data->creator = $creator;
        $data->fileExtensionId = $this->fileExtensionDirectory->getId($fileExtension);
        $data->save();

        foreach ($jsonData['parentIds'] as $parentId) {

            $data = new AssetCollection();
            $data->ignoreIfExists = true;
            $data->assetId = $assetId;
            $data->collectionId = $parentId;
            $data->save();

        }


        foreach ($jsonData['parentPaths'] as $parentPath) {

            $data = new AssetCollectionPath();
            $data->assetId = $assetId;
            $data->collectionTypeId = $parentPath['collectionTypeId'];
            $assetCollectionPathId = $data->save();

            $itemOrder = 0;

            foreach ($parentPath['pathSegments'] as $segment) {

                $data = new AssetCollectionPathSegment();
                $data->assetCollectionPathId = $assetCollectionPathId;
                $data->collectionId = $segment['collectionId'];
                $data->itemOrder = $itemOrder;
                $data->save();

                $itemOrder++;

            }

        }

    }

}