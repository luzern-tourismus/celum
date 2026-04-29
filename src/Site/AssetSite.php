<?php

namespace LuzernTourismus\Celum\Site;

use Nemundo\Web\Site\AbstractSite;
use LuzernTourismus\Celum\Page\AssetPage;

class AssetSite extends AbstractSite
{
    protected function loadSite()
    {
        $this->title = 'Asset';
        $this->url = 'asset';
    }

    public function loadContent()
    {
        (new AssetPage())->render();
    }
}