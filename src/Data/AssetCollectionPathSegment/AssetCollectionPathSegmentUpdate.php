<?php
namespace LuzernTourismus\Celum\Data\AssetCollectionPathSegment;
use Nemundo\Model\Data\AbstractModelUpdate;
class AssetCollectionPathSegmentUpdate extends AbstractModelUpdate {
/**
* @var AssetCollectionPathSegmentModel
*/
public $model;

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
public function update() {
$this->typeValueList->setModelValue($this->model->assetCollectionPathId, $this->assetCollectionPathId);
$this->typeValueList->setModelValue($this->model->collectionId, $this->collectionId);
$this->typeValueList->setModelValue($this->model->itemOrder, $this->itemOrder);
parent::update();
}
}