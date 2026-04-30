<?php

namespace LuzernTourismus\Celum\Controller;

use LuzernTourismus\Celum\Site\HomeSite;
use Nemundo\App\Application\Site\AdminAppSite;
use Nemundo\App\Application\Site\AppSite;
use Nemundo\App\UserAction\Site\UserActionSite;
use Nemundo\Web\Controller\AbstractWebController;

class CelumController extends AbstractWebController
{
    protected function loadController()
    {

        new HomeSite($this);
        new AppSite($this);
        new AdminAppSite($this);
        new UserActionSite($this);

    }
}