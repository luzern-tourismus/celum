<?php

namespace LuzernTourismus\Celum\Reader\Collection;

use LuzernTourismus\Celum\Data\Collection\CollectionReader;

class CollectionDataReader extends CollectionReader
{

    public function __construct()
    {

        parent::__construct();
        $this->model->loadCollectionType();

    }

}