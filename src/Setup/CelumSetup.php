<?php

namespace LuzernTourismus\Celum\Setup;

use LuzernTourismus\Celum\Application\CelumApplication;
use Nemundo\App\Script\Setup\ScriptSetup;
use Nemundo\Project\Install\ProjectInstall;
use Nemundo\Project\Reset\ProjectReset;
use Nemundo\Project\Setup\AbstractSetup;
use Nemundo\User\Script\AdminUserScript;

class CelumSetup extends AbstractSetup
{
    public function run()
    {
        $reset = new ProjectReset();
        (new ProjectInstall())->install();
        (new ScriptSetup())->addScript(new AdminUserScript());

        (new CelumApplication())->installApp();

        $reset->remove();
    }
}