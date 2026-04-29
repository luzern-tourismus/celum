<?php
namespace LuzernTourismus\Celum\Data\AssetCollectionPath;
class AssetCollectionPathRow extends \Nemundo\Model\Row\AbstractModelDataRow {
/**
* @var \Nemundo\Model\Row\AbstractModelDataRow
*/
private $row;

/**
* @var AssetCollectionPathModel
*/
public $model;

/**
* @var string
*/
public $id;

/**
* @var int
*/
public $collectionTypeId;

/**
* @var \LuzernTourismus\Celum\Data\CollectionType\CollectionTypeRow
*/
public $collectionType;

/**
* @var int
*/
public $assetId;

/**
* @var \LuzernTourismus\Celum\Data\Asset\AssetRow
*/
public $asset;

public function __construct(\Nemundo\Db\Row\AbstractDataRow $row, $model, $multiLanguage = false) {
parent::__construct($row->getData());
$this->row = $row;
$this->id = $this->getModelValue($model->id);
$this->collectionTypeId = intval($this->getModelValue($model->collectionTypeId));
if ($model->collectionType !== null) {
$this->loadLuzernTourismusCelumDataCollectionTypeCollectionTypecollectionTypeRow($model->collectionType);
}
$this->assetId = intval($this->getModelValue($model->assetId));
if ($model->asset !== null) {
$this->loadLuzernTourismusCelumDataAssetAssetassetRow($model->asset);
}
}
private function loadLuzernTourismusCelumDataCollectionTypeCollectionTypecollectionTypeRow($model) {
$this->collectionType = new \LuzernTourismus\Celum\Data\CollectionType\CollectionTypeRow($this->row, $model);
}
private function loadLuzernTourismusCelumDataAssetAssetassetRow($model) {
$this->asset = new \LuzernTourismus\Celum\Data\Asset\AssetRow($this->row, $model);
}
}