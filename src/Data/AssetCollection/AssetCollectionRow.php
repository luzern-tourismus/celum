<?php
namespace LuzernTourismus\Celum\Data\AssetCollection;
class AssetCollectionRow extends \Nemundo\Model\Row\AbstractModelDataRow {
/**
* @var \Nemundo\Model\Row\AbstractModelDataRow
*/
private $row;

/**
* @var AssetCollectionModel
*/
public $model;

/**
* @var string
*/
public $id;

/**
* @var int
*/
public $assetId;

/**
* @var \LuzernTourismus\Celum\Data\Asset\AssetRow
*/
public $asset;

/**
* @var int
*/
public $collectionId;

/**
* @var \LuzernTourismus\Celum\Data\Collection\CollectionRow
*/
public $collection;

public function __construct(\Nemundo\Db\Row\AbstractDataRow $row, $model, $multiLanguage = false) {
parent::__construct($row->getData());
$this->row = $row;
$this->id = $this->getModelValue($model->id);
$this->assetId = intval($this->getModelValue($model->assetId));
if ($model->asset !== null) {
$this->loadLuzernTourismusCelumDataAssetAssetassetRow($model->asset);
}
$this->collectionId = intval($this->getModelValue($model->collectionId));
if ($model->collection !== null) {
$this->loadLuzernTourismusCelumDataCollectionCollectioncollectionRow($model->collection);
}
}
private function loadLuzernTourismusCelumDataAssetAssetassetRow($model) {
$this->asset = new \LuzernTourismus\Celum\Data\Asset\AssetRow($this->row, $model);
}
private function loadLuzernTourismusCelumDataCollectionCollectioncollectionRow($model) {
$this->collection = new \LuzernTourismus\Celum\Data\Collection\CollectionRow($this->row, $model);
}
}