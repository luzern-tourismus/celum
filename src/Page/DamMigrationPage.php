<?php

namespace LuzernTourismus\Celum\Page;

use LuzernTourismus\Celum\Com\Tab\CelumTab;
use Nemundo\Admin\Com\Layout\AdminFlexboxLayout;
use Nemundo\Com\Template\AbstractTemplateDocument;

class DamMigrationPage extends AbstractTemplateDocument
{
    public function getContent()
    {

        $layout = new AdminFlexboxLayout($this);
        new CelumTab($layout);

        return parent::getContent();
    }
}