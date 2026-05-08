<?php

namespace LuzernTourismus\Celum\Site;

use LuzernTourismus\Celum\Page\FileExtensionPage;
use Nemundo\Web\Site\AbstractSite;

class FileExtensionSite extends AbstractSite
{
    protected function loadSite()
    {
        $this->title = 'File Extension';
        $this->url = 'file-extension';
    }

    public function loadContent()
    {
        (new FileExtensionPage())->render();
    }
}