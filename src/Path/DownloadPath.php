<?php

namespace LuzernTourismus\Celum\Path;

use Nemundo\Project\Path\TmpPath;

class DownloadPath extends TmpPath
{

    protected function loadPath()
    {
        parent::loadPath();
        $this->addPath('download');

    }

}