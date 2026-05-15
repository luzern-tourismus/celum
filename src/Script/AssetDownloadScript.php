<?php

namespace LuzernTourismus\Celum\Script;

use LuzernTourismus\Celum\Download\AssetDownload;
use LuzernTourismus\Celum\Path\CelumAssetPath;
use LuzernTourismus\Celum\Reader\Asset\AssetDataReader;
use Nemundo\App\Script\Type\AbstractConsoleScript;
use Nemundo\Core\Debug\Debug;
use Nemundo\Core\System\PhpConfig;
use Nemundo\Core\Time\Stopwatch;

class AssetDownloadScript extends AbstractConsoleScript
{
    protected function loadScript()
    {
        $this->scriptName = 'celum-asset-download';
    }

    public function run()
    {


        (new PhpConfig())->setUnlimitedMemoryLimit();

        (new CelumAssetPath())->createPath();

        $n=0;
        $assetReader = new AssetDataReader();
        //$assetReader->limit = 10;

        foreach ($assetReader->getData() as $assetRow) {

            $n++;
            (new Debug())->write($n);

            //$stoppwatchDownload = new Stopwatch('Download');
            (new AssetDownload())->downloadAsset($assetRow);
            //$stoppwatchDownload->stopAndPrintOutput();

        }

    }
}