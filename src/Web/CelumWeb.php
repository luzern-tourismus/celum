<?php
namespace Celum\Web;
use Nemundo\Web\Base\AbstractWeb;
use Nemundo\User\Login\CookieLogin;
use Nemundo\Admin\AdminConfig;
class CelumWeb extends AbstractWeb {
public function loadWeb() {
(new CookieLogin())->checkLogin();
AdminConfig::$defaultTemplateClassName = DefaultContentTemplate::class;
AdminConfig::$webController = new ...Controller();
AdminConfig::$webController->render();
}
}