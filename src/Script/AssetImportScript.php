<?php

namespace LuzernTourismus\Celum\Script;

use Nemundo\App\Script\Type\AbstractConsoleScript;
use LuzernTourismus\Celum\Import\AssetImport;

class AssetImportScript extends AbstractConsoleScript
{
    protected function loadScript()
    {
        $this->scriptName = 'celum-asset-import';
    }

    public function run()
    {

        (new AssetImport())->import();

    }
}