<?php
namespace LuzernTourismus\Celum\Data\AssetCollectionPathSegment;
class AssetCollectionPathSegmentRow extends \Nemundo\Model\Row\AbstractModelDataRow {
/**
* @var \Nemundo\Model\Row\AbstractModelDataRow
*/
private $row;

/**
* @var AssetCollectionPathSegmentModel
*/
public $model;

/**
* @var string
*/
public $id;

/**
* @var int
*/
public $assetCollectionPathId;

/**
* @var \LuzernTourismus\Celum\Data\AssetCollectionPath\AssetCollectionPathRow
*/
public $assetCollectionPath;

/**
* @var int
*/
public $collectionId;

/**
* @var \LuzernTourismus\Celum\Data\Collection\CollectionRow
*/
public $collection;

/**
* @var int
*/
public $itemOrder;

public function __construct(\Nemundo\Db\Row\AbstractDataRow $row, $model, $multiLanguage = false) {
parent::__construct($row->getData());
$this->row = $row;
$this->id = $this->getModelValue($model->id);
$this->assetCollectionPathId = intval($this->getModelValue($model->assetCollectionPathId));
if ($model->assetCollectionPath !== null) {
$this->loadLuzernTourismusCelumDataAssetCollectionPathAssetCollectionPathassetCollectionPathRow($model->assetCollectionPath);
}
$this->collectionId = intval($this->getModelValue($model->collectionId));
if ($model->collection !== null) {
$this->loadLuzernTourismusCelumDataCollectionCollectioncollectionRow($model->collection);
}
$this->itemOrder = intval($this->getModelValue($model->itemOrder));
}
private function loadLuzernTourismusCelumDataAssetCollectionPathAssetCollectionPathassetCollectionPathRow($model) {
$this->assetCollectionPath = new \LuzernTourismus\Celum\Data\AssetCollectionPath\AssetCollectionPathRow($this->row, $model);
}
private function loadLuzernTourismusCelumDataCollectionCollectioncollectionRow($model) {
$this->collection = new \LuzernTourismus\Celum\Data\Collection\CollectionRow($this->row, $model);
}
}