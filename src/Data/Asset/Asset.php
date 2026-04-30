<?php
namespace LuzernTourismus\Celum\Data\Asset;
class Asset extends \Nemundo\Model\Data\AbstractModelData {
/**
* @var AssetModel
*/
protected $model;

/**
* @var int
*/
public $id;

/**
* @var string
*/
public $name;

/**
* @var string
*/
public $description;

/**
* @var string
*/
public $fileExtensionId;

public function __construct() {
parent::__construct();
$this->model = new AssetModel();
}
public function save() {
$id = $this->id;
$this->typeValueList->setModelValue($this->model->id, $id);
$this->typeValueList->setModelValue($this->model->name, $this->name);
$this->typeValueList->setModelValue($this->model->description, $this->description);
$this->typeValueList->setModelValue($this->model->fileExtensionId, $this->fileExtensionId);
$id = parent::save();
return $id;
}
}