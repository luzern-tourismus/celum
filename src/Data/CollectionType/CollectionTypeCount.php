<?php
namespace LuzernTourismus\Celum\Data\CollectionType;
class CollectionTypeCount extends \Nemundo\Model\Count\AbstractModelDataCount {
/**
* @var CollectionTypeModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new CollectionTypeModel();
}
}