<?php
namespace LuzernTourismus\Celum\Data\CollectionType;
class CollectionTypeValue extends \Nemundo\Model\Value\AbstractModelDataValue {
/**
* @var CollectionTypeModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new CollectionTypeModel();
}
}