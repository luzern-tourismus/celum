<?php
namespace LuzernTourismus\Celum\Data\CollectionType;
class CollectionTypePaginationReader extends \Nemundo\Model\Reader\AbstractPaginationModelDataReader {
/**
* @var CollectionTypeModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new CollectionTypeModel();
}
/**
* @return CollectionTypeRow[]
*/
public function getData() {
$list = [];
foreach (parent::getData() as $dataRow) {
$row = new CollectionTypeRow($dataRow, $this->model);
$list[] = $row;
}
return $list;
}
}