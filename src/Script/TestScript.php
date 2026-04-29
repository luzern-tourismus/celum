<?php

namespace LuzernTourismus\Celum\Script;


use LuzernTourismus\Celum\Import\CollectionTypeImport;
use Nemundo\App\Script\Type\AbstractConsoleScript;

class TestScript extends AbstractConsoleScript
{
    protected function loadScript()
    {
        $this->scriptName = 'celum-test';
    }

    public function run()
    {

        (new CollectionTypeImport())->importData();


    }
}