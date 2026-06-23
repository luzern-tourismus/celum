<?php

namespace LuzernTourismus\Celum\Reader\Asset;

use LuzernTourismus\Celum\Data\Asset\AssetPaginationReader;

class AssetDataPaginationReader extends AssetPaginationReader
{

    use AssetDataTrait;

    public function __construct()
    {

        parent::__construct();
        $this->loadModel();

    }

}