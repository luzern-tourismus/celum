<?php
namespace LuzernTourismus\Celum\Data\CollectionType;
class CollectionTypeDelete extends \Nemundo\Model\Delete\AbstractModelDelete {
/**
* @var CollectionTypeModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new CollectionTypeModel();
}
}