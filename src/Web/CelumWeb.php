<?php

namespace LuzernTourismus\Celum\Web;

use LuzernTourismus\Celum\Controller\CelumController;
use Nemundo\Admin\AdminConfig;
use Nemundo\Admin\Template\AdminTemplate;
use Nemundo\Admin\Template\NavbarAdminTemplate;
use Nemundo\User\Login\CookieLogin;
use Nemundo\Web\Base\AbstractWeb;

class CelumWeb extends AbstractWeb
{
    public function loadWeb()
    {
        (new CookieLogin())->checkLogin();
        //AdminConfig::$defaultTemplateClassName = NavbarAdminTemplate::class;

        //AdminConfig::$documentTitle = '';
        /*AdminConfig::$logoUrl = '/img/logo_luzern.svg';
        AdminConfig::$logoText = ;*/

        AdminConfig::$webController = new CelumController();
        AdminConfig::$webController->render();
    }
}