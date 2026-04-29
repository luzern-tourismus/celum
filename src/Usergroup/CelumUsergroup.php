<?php

namespace LuzernTourismus\Celum\Usergroup;

use Nemundo\User\Usergroup\AbstractUsergroup;

class CelumUsergroup extends AbstractUsergroup
{
    protected function loadUsergroup()
    {
        $this->usergroup = 'Celum';
        $this->usergroupId = 'd2d39ee5-fe39-4ecd-94fe-084ee8d532d4';
    }
}