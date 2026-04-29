<?php

namespace LuzernTourismus\Celum\Com\ListBox;

use LuzernTourismus\Celum\Data\FileExtension\FileExtensionReader;
use LuzernTourismus\Celum\Reader\FileExtension\FileExtensionDataReader;
use Nemundo\Admin\Com\ListBox\AdminListBox;

class FileExtensionListBox extends AdminListBox
{
    public function getContent()
    {

        $this->label = 'File Extension';

        foreach ((new FileExtensionDataReader())->getData() as $fileExtensionRow) {
            $this->addItem($fileExtensionRow->id, $fileExtensionRow->fileExtension);
        }

        return parent::getContent();
    }
}