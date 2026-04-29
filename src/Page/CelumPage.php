<?php

namespace LuzernTourismus\Celum\Page;

use Nemundo\Admin\Com\Layout\AdminFlexboxLayout;
use Nemundo\Com\Template\AbstractTemplateDocument;
use LuzernTourismus\Celum\Com\Tab\CelumTab;

class CelumPage extends AbstractTemplateDocument
{
    public function getContent()
    {

        $layout = new AdminFlexboxLayout($this);
        new CelumTab($layout);


        return parent::getContent();
    }
}