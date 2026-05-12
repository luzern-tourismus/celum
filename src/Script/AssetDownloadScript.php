<?php

namespace LuzernTourismus\Celum\Script;

use LuzernTourismus\Celum\Download\AssetDownload;
use LuzernTourismus\Celum\Reader\Asset\AssetDataReader;
use Nemundo\App\Script\Type\AbstractConsoleScript;
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

        $assetReader = new AssetDataReader();
        $assetReader->limit = 10;

        foreach ($assetReader->getData() as $assetRow) {

            $stoppwatchDownload = new Stopwatch('Download');
            (new AssetDownload())->downloadAsset($assetRow);
            $stoppwatchDownload->stopAndPrintOutput();

        }

    }
}