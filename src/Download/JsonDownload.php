<?php

namespace LuzernTourismus\Celum\Download;

use LuzernTourismus\Celum\Path\CelumJsonPath;
use LuzernTourismus\Celum\WebRequest\CelumWebRequest;
use Nemundo\Core\Base\AbstractBase;
use Nemundo\Core\File\File;
use Nemundo\Core\TextFile\Writer\TextFileWriter;

class JsonDownload extends AbstractBase
{

    public function downloadJson($assetId)
    {

        $filename = (new CelumJsonPath())
            ->addPath($assetId . '.json')
            ->getFullFilename();

        if ((new File($filename))->fileNotExists()) {

            $url = 'https://content.luzern.com/content-api/v1/assets/' . $assetId;

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