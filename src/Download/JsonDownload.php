<?php

namespace LuzernTourismus\Celum\Download;

use LuzernTourismus\Celum\Data\Asset\AssetRow;
use LuzernTourismus\Celum\Path\CelumAssetPath;
use LuzernTourismus\Celum\Path\CelumJsonPath;
use LuzernTourismus\Celum\WebRequest\CelumWebRequest;
use Nemundo\Core\Base\AbstractBase;
use Nemundo\Core\File\File;
use Nemundo\Core\Json\Reader\JsonReader;
use Nemundo\Core\TextFile\Writer\TextFileWriter;
use Nemundo\Core\Time\Stopwatch;

class JsonDownload extends AbstractBase
{

    public function downloadAsset(AssetRow $assetRow)
    {

        $filename = (new CelumJsonPath())
            ->addPath($assetRow->id . '.json')
            ->getFullFilename();

        if ((new File($filename))->fileNotExists()) {

            $url = 'https://content.luzern.com/content-api/v1/assets/' . $assetRow->id;

            $request = new CelumWebRequest();
            $response = $request->getUrl($url);

            $file = new TextFileWriter($filename);
            $file->overwriteExistingFile = true;
            $file->addLine($response->html);
            $file->writeFile();

        }

        return $filename;

    }

}