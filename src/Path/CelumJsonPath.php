<?php

namespace LuzernTourismus\Celum\Path;

use Nemundo\Core\Path\AbstractPath;
use Nemundo\Project\Config\ProjectConfigReader;

class CelumJsonPath extends AbstractPath  // ProjectPath
{

    protected function loadPath()
    {

        //parent::loadPath();
        //$this->addPath('celum_asset');

        $path = (new ProjectConfigReader())->getValue('celum_asset_path');
        $this
            ->addPath($path)
            ->addPath('json');

    }

}