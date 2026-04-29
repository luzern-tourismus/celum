<?php
namespace LuzernTourismus\Celum\Data\CollectionType;
class CollectionTypeBulk extends \Nemundo\Model\Data\AbstractModelDataBulk {
/**
* @var CollectionTypeModel
*/
protected $model;

/**
* @var int
*/
public $id;

/**
* @var string
*/
public $collectionType;

public function __construct() {
parent::__construct();
$this->model = new CollectionTypeModel();
}
public function save() {
$id = $this->id;
$this->typeValueList->setModelValue($this->model->id, $id);
$this->typeValueList->setModelValue($this->model->collectionType, $this->collectionType);
$id = parent::save();
return $id;
}
}