<?php

namespace LuzernTourismus\Celum\Download;

use LuzernTourismus\Celum\Data\Asset\AssetRow;
use LuzernTourismus\Celum\Path\CelumAssetPath;
use LuzernTourismus\Celum\WebRequest\CelumWebRequest;
use Nemundo\Core\Base\AbstractBase;
use Nemundo\Core\File\File;
use Nemundo\Core\Json\Reader\JsonReader;
use Nemundo\Core\Time\Stopwatch;

class AssetDownload extends AbstractBase
{

    public function downloadAsset(AssetRow $assetRow)
    {

        $filename = (new CelumAssetPath())
            ->addPath($assetRow->id . '.' . $assetRow->fileExtension->fileExtension)
            ->getFullFilename();

        /*$filenameJson = (new CelumAssetPath())
            ->addPath($assetRow->id . '.json')
            ->getFullFilename();

        if ((new File($filename))->fileExists()) {
            if ((new File($filename))->getFileSize() === 0) {
                (new File($filename))->deleteFile();

                if ((new File($filenameJson))->fileExists()) {
                    (new File($filenameJson))->deleteFile();
                }

            }
        }*/


        if (!(new File($filename))->fileExists()) {

            $url = 'https://content.luzern.com/content-api/v1/assets/download?assetIds=' . $assetRow->id . '&downloadFormatId=1';

            $stoppwatch = new Stopwatch('Download Json Id ' . $assetRow->id);
            $response = (new CelumWebRequest())->getUrl($url);
            $stoppwatch->stopAndPrintOutput();

            /*$file = new TextFileWriter($filenameJson);
            $file->addLine($response->html);
            $file->writeFile();*/


            $data = (new JsonReader())->fromText($response->html)->getData();
            $downloadUrl = $data['url'];

            $stoppwatch = new Stopwatch('Download Asset Id ' . $assetRow->id);
            (new CelumWebRequest())->downloadUrl($downloadUrl, $filename);
            $stoppwatch->stopAndPrintOutput();

        }

        return $filename;

    }

}