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

        $previewUrl = null;
        $hasPreview = false;
        if (isset($item['currentVersion']['previewUrls'])) {
            $previewUrl = $item['currentVersion']['previewUrls']['LARGE'];
            $hasPreview = true;
        }

        if (isset($item['currentVersion']['previewUrls']['VIDEO'])) {
            $previewUrl = $item['currentVersion']['previewUrls']['VIDEO'];
            $hasPreview = true;
        }

        $fileExtension = $item['currentVersion']['fileExtension'];

        $filename = (new CelumAssetPath())
            ->addPath($assetId . '.' . $fileExtension)
            ->getFullFilename();


        if (!(new File($filename))->fileExists()) {

            $url = 'https://content.luzern.com/content-api/v1/assets/download?assetIds=' . $assetId . '&downloadFormatId=1';

            $response = (new CelumWebRequest())->getUrl($url);

            $data = (new JsonReader())->fromText($response->html)->getData();
            $downloadUrl = $data['url'];

            (new CelumWebRequest())->downloadUrl($downloadUrl, $filename);

        }


        $url = 'https://content.luzern.com/content-api/v1/assets/' . $assetId;

        $asset = $item['name'];

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

                }

            }

        }

        $data = new Asset();
        $data->updateOnDuplicate = true;
        $data->id = $assetId;
        $data->name = $asset;
        $data->description = $description;
        $data->fileExtensionId = $this->fileExtensionDirectory->getId($fileExtension);
        $data->hasPreviewUrl = $hasPreview;
        $data->previewUrl = $previewUrl;
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