<?php

namespace LuzernTourismus\Celum\Import;

use LuzernTourismus\Celum\Data\Asset\Asset;
use LuzernTourismus\Celum\Data\AssetCollection\AssetCollection;
use LuzernTourismus\Celum\Data\AssetCollectionPath\AssetCollectionPath;
use LuzernTourismus\Celum\Data\AssetCollectionPathSegment\AssetCollectionPathSegment;
use LuzernTourismus\Celum\Directory\FileExtensionDirectory;
use LuzernTourismus\Celum\Path\CelumAssetPath;
use LuzernTourismus\Celum\WebRequest\CelumWebRequest;
use Nemundo\Core\File\File;
use Nemundo\Core\Json\Reader\JsonReader;
use Nemundo\Core\TextFile\Writer\TextFileWriter;
use Nemundo\Project\Path\TmpPath;


class AssetImport extends AbstractCelumImport
{

    /**
     * @var bool
     */
    //public $downloadAsset = false;

    /**
     * @var FileExtensionDirectory
     */
    private $fileExtensionDirectory;

    protected function loadImport()
    {

        $this->endpoint = 'assets';
        $this->fileExtensionDirectory = new FileExtensionDirectory();

    }


    protected function onItem($item)
    {

        $assetId = $item['id'];
        $asset = $item['name'];
        $fileExtension = $item['currentVersion']['fileExtension'];

        $url = 'https://content.luzern.com/content-api/v1/assets/' . $assetId;

        $request = new CelumWebRequest();
        $response = $request->getUrl($url);

        $filename = (new TmpPath())
            ->addPath('celum_asset_detail_' . $assetId . '.json')
            ->getFullFilename();

        $file = new TextFileWriter($filename);
        $file->overwriteExistingFile = true;
        $file->addLine($response->html);
        $file->writeFile();

        $jsonReader = new JsonReader();
        $jsonReader->fromText($response->html);
        $jsonData = $jsonReader->getData();

        $description = '';
        $caption = '';
        $creator='';

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

        foreach ($item['parentIds'] as $parentId) {

            $data = new AssetCollection();
            $data->ignoreIfExists = true;
            $data->assetId = $assetId;
            $data->collectionId = $parentId;
            $data->save();

        }


        foreach ($item['parentPaths'] as $parentPath) {

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