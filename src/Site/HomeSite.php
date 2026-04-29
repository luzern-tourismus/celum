<?php

namespace LuzernTourismus\Celum\Site;

use LuzernTourismus\Celum\Page\HomePage;
use Nemundo\Web\Site\AbstractSite;

class HomeSite extends AbstractSite
{
    protected function loadSite()
    {
        $this->title = 'Home';
        $this->url = '';
    }

    public function loadContent()
    {
        (new HomePage())->render();
    }
}