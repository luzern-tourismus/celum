<?php

namespace LuzernTourismus\Celum\Script;


use LuzernTourismus\Celum\Import\AssetImport;
use LuzernTourismus\Celum\Import\CollectionTypeImport;
use LuzernTourismus\Celum\WebRequest\CelumWebRequest;
use Nemundo\App\Script\Type\AbstractConsoleScript;
use Nemundo\Core\Debug\Debug;

class TestScript extends AbstractConsoleScript
{
    protected function loadScript()
    {
        $this->scriptName = 'celum-test';
    }

    public function run()
    {

        (new AssetImport())->import();


        /*$assetId =2774;
        $url = 'https://content.luzern.com/content-api/v1/assets/' . $assetId;

        $request = new CelumWebRequest();
        $response = $request->getUrl($url);

        (new Debug())->write($response);*/

    }
}