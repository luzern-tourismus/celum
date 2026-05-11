<?php

namespace LuzernTourismus\Celum\Reader\Asset;

use LuzernTourismus\Celum\Data\Asset\AssetReader;
use Nemundo\Core\Check\ValueCheck;

class AssetDataReader extends AssetReader
{

    public function __construct()
    {

        parent::__construct();
        $this->model->loadFileExtension();

    }


    public function filterById($id)
    {

        if ((new ValueCheck())->hasValue($id)) {
            $this->filter->andEqual($this->model->id, $id);
        }

        return $this;

    }


    public function filterByName($name)
    {

        if ((new ValueCheck())->hasValue($name)) {
            $this->filter->andContains($this->model->name, $name);
        }

        return $this;

    }

    public function filterByFileExtension($fileExtension)
    {

        if ((new ValueCheck())->hasValue($fileExtension)) {
            $this->filter->orEqual($this->model->fileExtension->fileExtension, $fileExtension);
        }

        return $this;

    }


    public function filterByFileExtensionId($fileExtensionId)
    {

        if ((new ValueCheck())->hasValue($fileExtensionId)) {
            $this->filter->andEqual($this->model->fileExtension->id, $fileExtensionId);
        }

        return $this;

    }


}