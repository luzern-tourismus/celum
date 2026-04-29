<?php

namespace LuzernTourismus\Celum\Path;

use Nemundo\Project\Path\ProjectPath;

class CelumAssetPath extends ProjectPath
{

    protected function loadPath()
    {

        parent::loadPath();
        $this->addPath('celum_asset');

    }

}