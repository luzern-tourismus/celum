<?php

namespace LuzernTourismus\Celum\Import;

use LuzernTourismus\Celum\Data\CollectionType\CollectionType;
use LuzernTourismus\Celum\WebRequest\CelumWebRequest;
use Nemundo\Core\Base\Import\AbstractImport;
use Nemundo\Core\Debug\Debug;
use Nemundo\Core\Json\Reader\JsonReader;

class CollectionTypeImport extends AbstractImport
{

    public function importData()
    {

        $endpoint = 'collection-types';

        $url = 'https://content.luzern.com/content-api/v1/' . $endpoint;

        $request = new CelumWebRequest();
        $response = $request->getUrl($url);

        $jsonReader = new JsonReader();
        $jsonReader->fromText($response->html);
        $jsonData = $jsonReader->getData();

        foreach ($jsonData as $item) {

            $data = new CollectionType();
            $data->updateOnDuplicate = true;
            $data->id = $item['id'];
            $data->collectionType = $item['name'];
            $data->save();

        }

    }

}