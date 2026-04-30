<?php
namespace LuzernTourismus\Celum\Data\Asset;
class AssetBulk extends \Nemundo\Model\Data\AbstractModelDataBulk {
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

/**
* @var string
*/
public $caption;

/**
* @var string
*/
public $creator;

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
$this->typeValueList->setModelValue($this->model->caption, $this->caption);
$this->typeValueList->setModelValue($this->model->creator, $this->creator);
$id = parent::save();
return $id;
}
}