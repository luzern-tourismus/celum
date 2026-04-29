<?php

namespace LuzernTourismus\Celum\Page;

use Nemundo\App\UserAction\Widget\LoginWidget;
use Nemundo\Com\Template\AbstractTemplateDocument;

class HomePage extends AbstractTemplateDocument
{
    public function getContent()
    {

        new LoginWidget($this);

        return parent::getContent();
    }
}