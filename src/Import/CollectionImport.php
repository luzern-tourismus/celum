<?php

namespace LuzernTourismus\Celum\Import;

use LuzernTourismus\Celum\Data\Collection\Collection;

class CollectionImport extends AbstractCelumImport
{


    protected function loadImport()
    {

        $this->endpoint = 'collections';
        $this->parameter = 'recursive=true';

    }

    protected function onItem($item)
    {

        $data = new Collection();
        $data->updateOnDuplicate = true;
        $data->id = $item['id'];
        $data->collection = $item['name']['de'];
        $data->collectionTypeId = $item['typeId'];

        if (isset($item['parentId'])) {
            $data->parentId = $item['parentId'];
        }

        $data->save();

    }

}