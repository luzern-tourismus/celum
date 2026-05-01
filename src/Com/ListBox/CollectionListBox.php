<?php

namespace LuzernTourismus\Celum\Com\ListBox;

use LuzernTourismus\Celum\Reader\Collection\CollectionDataReader;
use Nemundo\Admin\Com\ListBox\AdminListBox;

class CollectionListBox extends AdminListBox
{
    public function getContent()
    {

        $this->label = 'Collection';

        foreach ((new CollectionDataReader())->orderByCollection()->getData() as $collectionRow) {
            $this->addItem($collectionRow->id, $collectionRow->collection);
        }

        return parent::getContent();
    }
}