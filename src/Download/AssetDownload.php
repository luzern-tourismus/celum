<?php

namespace LuzernTourismus\Celum\Download;

use LuzernTourismus\Celum\Data\Asset\AssetRow;
use LuzernTourismus\Celum\Path\CelumAssetPath;
use LuzernTourismus\Celum\WebRequest\CelumWebRequest;
use Nemundo\Core\Base\AbstractBase;
use Nemundo\Core\File\File;
use Nemundo\Core\Json\Reader\JsonReader;

class AssetDownload extends AbstractBase
{

    public function downloadAsset(AssetRow $assetRow)
    {

        $filename = (new CelumAssetPath())
            ->addPath($assetRow->id . '.' . $assetRow->fileExtension->fileExtension)
            ->getFullFilename();


        if (!(new File($filename))->fileExists()) {

            $url = 'https://content.luzern.com/content-api/v1/assets/download?assetIds=' . $assetRow->id . '&downloadFormatId=1';

            $response = (new CelumWebRequest())->getUrl($url);

            $data = (new JsonReader())->fromText($response->html)->getData();
            $downloadUrl = $data['url'];

            (new CelumWebRequest())->downloadUrl($downloadUrl, $filename);

        }

        return $filename;

    }

}