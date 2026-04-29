<?php
namespace LuzernTourismus\Celum\Data\CollectionType;
use Nemundo\Model\Id\AbstractModelIdValue;
class CollectionTypeId extends AbstractModelIdValue {
/**
* @var CollectionTypeModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new CollectionTypeModel();
}
}