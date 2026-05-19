<?php

namespace LuzernTourismus\Celum\Script;

use LuzernTourismus\Celum\Download\JsonDownload;
use LuzernTourismus\Celum\Path\CelumJsonPath;
use LuzernTourismus\Celum\Reader\Asset\AssetDataReader;
use Nemundo\App\Script\Type\AbstractConsoleScript;
use Nemundo\Core\Debug\Debug;
use Nemundo\Core\System\PhpConfig;

class JsonDownloadScript extends AbstractConsoleScript
{
    protected function loadScript()
    {
        $this->scriptName = 'celum-json-download';
    }

    public function run()
    {

        (new PhpConfig())->setUnlimitedMemoryLimit();

        (new CelumJsonPath())->createPath();

        $n = 0;
        $assetReader = new AssetDataReader();
        foreach ($assetReader->getData() as $assetRow) {

            $n++;
            //(new Debug())->write($n);

            (new JsonDownload())->downloadJson($assetRow);

        }

    }

}