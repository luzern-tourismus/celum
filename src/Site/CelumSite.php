<?php

namespace LuzernTourismus\Celum\Site;

use LuzernTourismus\Celum\Usergroup\CelumUsergroup;
use Nemundo\Web\Site\AbstractSite;
use LuzernTourismus\Celum\Page\CelumPage;

class CelumSite extends AbstractSite
{

    /**
     * @var CelumSite
     */
    public static $site;

    protected function loadSite()
    {
        $this->title = 'Celum';
        $this->url = 'Celum';
        $this->restricted=true;
        $this->addRestrictedUsergroup(new CelumUsergroup());

        CelumSite::$site = $this;

        new AssetSite($this);
        new CollectionSite($this);

    }

    public function loadContent()
    {
        (new CelumPage())->render();
    }
}