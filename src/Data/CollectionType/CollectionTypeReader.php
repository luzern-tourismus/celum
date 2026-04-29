<?php
namespace LuzernTourismus\Celum\Data\CollectionType;
class CollectionTypeReader extends \Nemundo\Model\Reader\ModelDataReader {
/**
* @var CollectionTypeModel
*/
public $model;

public function __construct() {
$this->model = new CollectionTypeModel();
parent::__construct();
}
/**
* @return CollectionTypeRow[]
*/
public function getData() {
$list = [];
foreach (parent::getData() as $dataRow) {
$row = $this->getModelRow($dataRow);
$list[] = $row;
}
return $list;
}
/**
* @return CollectionTypeRow
*/
public function getRow() {
$dataRow = parent::getRow();
$row = $this->getModelRow($dataRow);
return $row;
}
/**
* @return CollectionTypeRow
*/
public function getRowById($id) {
return parent::getRowById($id);
}
private function getModelRow($dataRow) {
$row = new CollectionTypeRow($dataRow, $this->model, $this->multiLanguage);
$row->model = $this->model;
return $row;
}
}