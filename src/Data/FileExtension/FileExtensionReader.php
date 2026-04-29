<?php
namespace LuzernTourismus\Celum\Data\FileExtension;
class FileExtensionReader extends \Nemundo\Model\Reader\ModelDataReader {
/**
* @var FileExtensionModel
*/
public $model;

public function __construct() {
$this->model = new FileExtensionModel();
parent::__construct();
}
/**
* @return FileExtensionRow[]
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
* @return FileExtensionRow
*/
public function getRow() {
$dataRow = parent::getRow();
$row = $this->getModelRow($dataRow);
return $row;
}
/**
* @return FileExtensionRow
*/
public function getRowById($id) {
return parent::getRowById($id);
}
private function getModelRow($dataRow) {
$row = new FileExtensionRow($dataRow, $this->model, $this->multiLanguage);
$row->model = $this->model;
return $row;
}
}