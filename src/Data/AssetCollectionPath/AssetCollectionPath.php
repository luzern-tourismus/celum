<?php
namespace LuzernTourismus\Celum\Data\AssetCollectionPath;
class AssetCollectionPath extends \Nemundo\Model\Data\AbstractModelData {
/**
* @var AssetCollectionPathModel
*/
protected $model;

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
public function save() {
$this->typeValueList->setModelValue($this->model->collectionTypeId, $this->collectionTypeId);
$this->typeValueList->setModelValue($this->model->assetId, $this->assetId);
$id = parent::save();
return $id;
}
}