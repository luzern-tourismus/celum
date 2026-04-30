<?php

namespace LuzernTourismus\Celum\Script;

use LuzernTourismus\Celum\Import\AssetImport;
use LuzernTourismus\Celum\Import\CollectionImport;
use LuzernTourismus\Celum\Import\CollectionTypeImport;
use Nemundo\App\Script\Type\AbstractConsoleScript;

class ImportScript extends AbstractConsoleScript
{
    protected function loadScript()
    {
        $this->scriptName = 'celum-import';
    }

    public function run()
    {

        (new CollectionTypeImport())->importData();
        (new CollectionImport())->import();
        (new AssetImport())->import();


    }
}