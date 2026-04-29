<?php
namespace LuzernTourismus\Celum\Data\CollectionType;
use Nemundo\Model\Data\AbstractModelUpdate;
class CollectionTypeUpdate extends AbstractModelUpdate {
/**
* @var CollectionTypeModel
*/
public $model;

/**
* @var string
*/
public $collectionType;

public function __construct() {
parent::__construct();
$this->model = new CollectionTypeModel();
}
public function update() {
$this->typeValueList->setModelValue($this->model->collectionType, $this->collectionType);
parent::update();
}
}