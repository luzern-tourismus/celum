<?php

namespace LuzernTourismus\Celum\Import;

use LuzernTourismus\Celum\Directory\FileExtensionDirectory;
use LuzernTourismus\Celum\Download\AssetBuilder;
use LuzernTourismus\Celum\Path\CelumJsonPath;


class AssetImport extends AbstractCelumImport
{

    protected function loadImport()
    {

        $this->endpoint = 'assets';

        (new CelumJsonPath())->createPath();

    }


    protected function onItem($json)
    {

        $assetId = $json['id'];
        (new AssetBuilder())->build($assetId);

    }

}