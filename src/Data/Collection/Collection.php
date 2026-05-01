<?php
namespace LuzernTourismus\Celum\Data\Collection;
class Collection extends \Nemundo\Model\Data\AbstractModelData {
/**
* @var CollectionModel
*/
protected $model;

/**
* @var int
*/
public $id;

/**
* @var string
*/
public $collection;

/**
* @var string
*/
public $collectionTypeId;

/**
* @var string
*/
public $parentId;

public function __construct() {
parent::__construct();
$this->model = new CollectionModel();
}
public function save() {
$id = $this->id;
$this->typeValueList->setModelValue($this->model->id, $id);
$this->typeValueList->setModelValue($this->model->collection, $this->collection);
$this->typeValueList->setModelValue($this->model->collectionTypeId, $this->collectionTypeId);
$this->typeValueList->setModelValue($this->model->parentId, $this->parentId);
$id = parent::save();
return $id;
}
}