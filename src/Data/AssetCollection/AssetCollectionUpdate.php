<?php
namespace LuzernTourismus\Celum\Data\AssetCollection;
use Nemundo\Model\Data\AbstractModelUpdate;
class AssetCollectionUpdate extends AbstractModelUpdate {
/**
* @var AssetCollectionModel
*/
public $model;

/**
* @var string
*/
public $assetId;

/**
* @var string
*/
public $collectionId;

public function __construct() {
parent::__construct();
$this->model = new AssetCollectionModel();
}
public function update() {
$this->typeValueList->setModelValue($this->model->assetId, $this->assetId);
$this->typeValueList->setModelValue($this->model->collectionId, $this->collectionId);
parent::update();
}
}