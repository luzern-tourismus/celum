<?php
namespace LuzernTourismus\Celum\Data\Collection;
use Nemundo\Model\Data\AbstractModelUpdate;
class CollectionUpdate extends AbstractModelUpdate {
/**
* @var CollectionModel
*/
public $model;

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
public function update() {
$this->typeValueList->setModelValue($this->model->collection, $this->collection);
$this->typeValueList->setModelValue($this->model->collectionTypeId, $this->collectionTypeId);
$this->typeValueList->setModelValue($this->model->parentId, $this->parentId);
parent::update();
}
}