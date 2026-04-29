<?php

namespace LuzernTourismus\Celum\Install;

use LuzernTourismus\Celum\Application\CelumApplication;
use LuzernTourismus\Celum\Application\DamMigrationApplication;
use LuzernTourismus\Celum\Data\CelumModelCollection;
use LuzernTourismus\Celum\Data\DamMigrationModelCollection;
use LuzernTourismus\Celum\Script\AssetImportScript;
use LuzernTourismus\Celum\Script\CleanScript;
use LuzernTourismus\Celum\Script\CollectionImportScript;
use LuzernTourismus\Celum\Script\FileDeleteScript;
use LuzernTourismus\Celum\Script\ImportScript;
use LuzernTourismus\Celum\Script\MigrationScript;
use LuzernTourismus\Celum\Script\OrtMigrationScript;
use LuzernTourismus\Celum\Script\TestScript;
use LuzernTourismus\Celum\Usergroup\CelumUsergroup;
use Nemundo\App\Application\Type\Install\AbstractInstall;
use Nemundo\App\Script\Setup\ScriptSetup;
use Nemundo\Model\Setup\ModelCollectionSetup;
use Nemundo\User\Setup\UsergroupSetup;


class CelumInstall extends AbstractInstall
{
    public function install()
    {

        (new ModelCollectionSetup())
            ->addCollection(new CelumModelCollection());

        (new ScriptSetup(new CelumApplication()))
            ->addScript(new TestScript())
            ->addScript(new CleanScript())
            ->addScript(new CollectionImportScript())
            ->addScript(new AssetImportScript())
            ->addScript(new ImportScript());

        (new UsergroupSetup())
            ->addUsergroup(new CelumUsergroup());

    }
}