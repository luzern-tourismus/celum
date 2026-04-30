<?php

require __DIR__ . '/../config.php';


$reader = new \LuzernTourismus\Celum\Reader\Asset\AssetDataReader();
$reader->limit = 2;
foreach ($reader->getData() as $assetRow) {
    (new \LuzernTourismus\Celum\Download\AssetDownload())->downloadAsset($assetRow);
}



