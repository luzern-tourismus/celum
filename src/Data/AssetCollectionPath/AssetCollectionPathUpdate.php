<?php
namespace LuzernTourismus\Celum\Data\AssetCollectionPath;
use Nemundo\Model\Data\AbstractModelUpdate;
class AssetCollectionPathUpdate extends AbstractModelUpdate {
/**
* @var AssetCollectionPathModel
*/
public $model;

/**
* @var string
*/
public $collectionTypeId;

/**
* @var string
*/
public $assetId;

public function __construct() {
parent::__construct();
$this->model = new AssetCollectionPathModel();
}
public function update() {
$this->typeValueList->setModelValue($this->model->collectionTypeId, $this->collectionTypeId);
$this->typeValueList->setModelValue($this->model->assetId, $this->assetId);
parent::update();
}
}