<?php
namespace LuzernTourismus\Celum\Data\Ort;
class OrtReader extends \Nemundo\Model\Reader\ModelDataReader {
/**
* @var OrtModel
*/
public $model;

public function __construct() {
$this->model = new OrtModel();
parent::__construct();
}
/**
* @return OrtRow[]
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
* @return OrtRow
*/
public function getRow() {
$dataRow = parent::getRow();
$row = $this->getModelRow($dataRow);
return $row;
}
/**
* @return OrtRow
*/
public function getRowById($id) {
return parent::getRowById($id);
}
private function getModelRow($dataRow) {
$row = new OrtRow($dataRow, $this->model, $this->multiLanguage);
$row->model = $this->model;
return $row;
}
}