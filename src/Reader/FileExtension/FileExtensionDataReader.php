<?php

namespace LuzernTourismus\Celum\Reader\FileExtension;

use LuzernTourismus\Celum\Data\FileExtension\FileExtensionReader;

class FileExtensionDataReader extends FileExtensionReader
{

    public function __construct()
    {

        parent::__construct();
        $this->addOrder($this->model->fileExtension);

    }

}