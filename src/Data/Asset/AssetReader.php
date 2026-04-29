<?php
namespace LuzernTourismus\Celum\Data\Asset;
class AssetReader extends \Nemundo\Model\Reader\ModelDataReader {
/**
* @var AssetModel
*/
public $model;

public function __construct() {
$this->model = new AssetModel();
parent::__construct();
}
/**
* @return AssetRow[]
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
* @return AssetRow
*/
public function getRow() {
$dataRow = parent::getRow();
$row = $this->getModelRow($dataRow);
return $row;
}
/**
* @return AssetRow
*/
public function getRowById($id) {
return parent::getRowById($id);
}
private function getModelRow($dataRow) {
$row = new AssetRow($dataRow, $this->model, $this->multiLanguage);
$row->model = $this->model;
return $row;
}
}