<?php
namespace LuzernTourismus\Celum\Data;
use Nemundo\Model\Collection\AbstractModelCollection;
class CelumModelCollection extends AbstractModelCollection {
protected function loadCollection() {
$this->addModel(new \LuzernTourismus\Celum\Data\Asset\AssetModel());
$this->addModel(new \LuzernTourismus\Celum\Data\AssetCollection\AssetCollectionModel());
$this->addModel(new \LuzernTourismus\Celum\Data\AssetCollectionPath\AssetCollectionPathModel());
$this->addModel(new \LuzernTourismus\Celum\Data\AssetCollectionPathSegment\AssetCollectionPathSegmentModel());
$this->addModel(new \LuzernTourismus\Celum\Data\Collection\CollectionModel());
$this->addModel(new \LuzernTourismus\Celum\Data\CollectionType\CollectionTypeModel());
$this->addModel(new \LuzernTourismus\Celum\Data\FileExtension\FileExtensionModel());
$this->addModel(new \LuzernTourismus\Celum\Data\Ort\OrtModel());
}
}