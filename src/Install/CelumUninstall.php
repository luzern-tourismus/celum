<?php

namespace LuzernTourismus\Celum\Install;

use LuzernTourismus\Celum\Data\CelumModelCollection;
use Nemundo\App\Application\Type\Install\AbstractUninstall;
use Nemundo\Model\Setup\ModelCollectionSetup;

class CelumUninstall extends AbstractUninstall
{
    public function uninstall()
    {
        (new ModelCollectionSetup())->removeCollection(new CelumModelCollection());
    }
}