<?php
namespace LuzernTourismus\Celum\Data\AssetCollection;
class AssetCollection extends \Nemundo\Model\Data\AbstractModelData {
/**
* @var AssetCollectionModel
*/
protected $model;

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
public function save() {
$this->typeValueList->setModelValue($this->model->assetId, $this->assetId);
$this->typeValueList->setModelValue($this->model->collectionId, $this->collectionId);
$id = parent::save();
return $id;
}
}