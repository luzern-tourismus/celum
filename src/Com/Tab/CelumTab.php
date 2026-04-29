<?php

namespace LuzernTourismus\Celum\Com\Tab;

use LuzernTourismus\Celum\Site\CelumSite;
use Nemundo\Admin\Com\Tab\AdminTab;

class CelumTab extends AdminTab
{

    public function getContent()
    {

        $this->site = CelumSite::$site;
        return parent::getContent();

    }

}