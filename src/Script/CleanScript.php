<?php

namespace LuzernTourismus\Celum\Script;

use LuzernTourismus\Celum\Application\CelumApplication;
use Nemundo\App\Script\Type\AbstractConsoleScript;

class CleanScript extends AbstractConsoleScript
{
    protected function loadScript()
    {
        $this->scriptName = 'celum-clean';
    }

    public function run()
    {

        (new CelumApplication())->reinstallApp();

    }
}