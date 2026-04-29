<?php

namespace LuzernTourismus\Celum\Directory;

use LuzernTourismus\Celum\Data\FileExtension\FileExtension;
use LuzernTourismus\Celum\Data\FileExtension\FileExtensionReader;
use Nemundo\Core\Directory\AbstractDirectory;
use Nemundo\Core\Directory\AbstractKeyValueDirectory;

class FileExtensionDirectory extends AbstractKeyValueDirectory
{

    protected function loadDirectory()
    {

        foreach ((new FileExtensionReader())->getData() as $fileExtensionRow) {
            $this->addKeyValue($fileExtensionRow->id,$fileExtensionRow->fileExtension);
        }

    }


    protected function onNotExists($value)
    {

        $data = new FileExtension();
        $data->fileExtension = $value;
        $id =$data->save();

        $this->addKeyValue($id,$value);

    }


}