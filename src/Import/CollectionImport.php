<?php

namespace LuzernTourismus\Celum\Import;

use LuzernTourismus\Celum\Data\Collection\Collection;

class CollectionImport extends AbstractCelumImport
{


    //public $parentId;


    protected function loadImport()
    {

        $this->endpoint = 'collections';
        $this->parameter = 'recursive=true';

        /*if ($this->parentId !== null) {
            $this->parameter .= '&parentId=' . $this->parentId;
        }*/

    }

    protected function onItem($item)
    {

        $data = new Collection();
        $data->updateOnDuplicate = true;
        $data->id = $item['id'];
        $data->collection = $item['name']['de'];
        $data->collectionTypeId = $item['typeId'];
        $data->save();

    }

}