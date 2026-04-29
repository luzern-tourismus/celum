<?php

namespace LuzernTourismus\Celum\Application;

use LuzernTourismus\Celum\Data\CelumModelCollection;
use LuzernTourismus\Celum\Install\CelumInstall;
use LuzernTourismus\Celum\Install\CelumUninstall;
use LuzernTourismus\Celum\Site\CelumSite;
use Nemundo\App\Application\Type\AbstractApplication;

class CelumApplication extends AbstractApplication
{
    protected function loadApplication()
    {
        $this->application = 'Celum';
        $this->applicationId = '120e6d74-10f2-41ff-bb90-855789c21bf8';
        $this->modelCollectionClass = CelumModelCollection::class;
        $this->installClass = CelumInstall::class;
        $this->uninstallClass = CelumUninstall::class;
        $this->appSiteClass = CelumSite::class;
    }
}