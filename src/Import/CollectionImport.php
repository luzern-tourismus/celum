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

    protected function onItem($json)
    {

        $data = new Collection();
        $data->updateOnDuplicate = true;
        $data->id = $json['id'];
        $data->collection = $json['name']['de'];
        $data->collectionTypeId = $json['typeId'];

        if (isset($json['parentId'])) {
            $data->parentId = $json['parentId'];
        }

        $data->save();

    }

}