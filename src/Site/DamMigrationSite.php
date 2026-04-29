<?php

namespace LuzernTourismus\Celum\Site;

use LuzernTourismus\Celum\Page\DamMigrationPage;
use LuzernTourismus\Celum\Usergroup\DamMigrationUsergroup;
use Nemundo\Web\Site\AbstractSite;

class DamMigrationSite extends AbstractSite
{

    /**
     * @var DamMigrationSite
     */
    public static $site;

    protected function loadSite()
    {

        $this->title = 'DAM Migration';
        $this->url = 'dam-migration';
        $this->restricted = true;
        $this->addRestrictedUsergroup(new DamMigrationUsergroup());

        DamMigrationSite::$site = $this;

        //new CelumSite($this);
        new CollectionSite($this);
        new AssetSite($this);
        new OrtSite($this);


    }

    public function loadContent()
    {
        (new DamMigrationPage())->render();
    }
}