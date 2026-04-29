<?php
namespace LuzernTourismus\Celum\Data\AssetCollectionPathSegment;
class AssetCollectionPathSegmentBulk extends \Nemundo\Model\Data\AbstractModelDataBulk {
/**
* @var AssetCollectionPathSegmentModel
*/
protected $model;

/**
* @var string
*/
public $assetCollectionPathId;

/**
* @var string
*/
public $collectionId;

/**
* @var int
*/
public $itemOrder;

public function __construct() {
parent::__construct();
$this->model = new AssetCollectionPathSegmentModel();
}
public function save() {
$this->typeValueList->setModelValue($this->model->assetCollectionPathId, $this->assetCollectionPathId);
$this->typeValueList->setModelValue($this->model->collectionId, $this->collectionId);
$this->typeValueList->setModelValue($this->model->itemOrder, $this->itemOrder);
$id = parent::save();
return $id;
}
}