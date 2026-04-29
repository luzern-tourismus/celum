<?php

namespace LuzernTourismus\Celum\Script;

use LuzernTourismus\Celum\Import\CollectionImport;
use Nemundo\App\Script\Type\AbstractConsoleScript;

class CollectionImportScript extends AbstractConsoleScript
{
    protected function loadScript()
    {
        $this->scriptName = 'celum-collection-import';
    }

    public function run()
    {

        (new CollectionImport())->import();

    }
}