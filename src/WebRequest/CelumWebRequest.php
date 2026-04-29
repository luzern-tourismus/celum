<?php

namespace LuzernTourismus\Celum\WebRequest;

use Nemundo\Core\Check\ValueCheck;
use Nemundo\Core\Debug\Debug;
use Nemundo\Core\WebRequest\Json\AbstractJsonCurlWebRequest;
use Nemundo\Project\Config\ProjectConfigReader;

class CelumWebRequest extends AbstractJsonCurlWebRequest
{

    private static $authentificationLoaded = false;

    private static $celumUser;

    private static $celumPassword;


    protected function loadRequest()
    {

        $this->userAgent = 'Celum Migration';

        if (!CelumWebRequest::$authentificationLoaded) {

            $user = (new ProjectConfigReader())->getValue('celum_user');
            $password = (new ProjectConfigReader())->getValue('celum_password');

            if (!(new ValueCheck())->hasValue($user)) {
                (new Debug())->write('No Celum User');
                exit;
            }

            CelumWebRequest::$celumUser = $user;
            CelumWebRequest::$celumPassword = $password;
            CelumWebRequest::$authentificationLoaded = true;
        }

        $this->authentication->authenticate = true;
        $this->authentication->username = CelumWebRequest::$celumUser;
        $this->authentication->password = CelumWebRequest::$celumPassword;

    }

}