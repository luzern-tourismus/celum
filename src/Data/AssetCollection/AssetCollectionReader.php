<?php
namespace LuzernTourismus\Celum\Data\AssetCollection;
class AssetCollectionReader extends \Nemundo\Model\Reader\ModelDataReader {
/**
* @var AssetCollectionModel
*/
public $model;

public function __construct() {
$this->model = new AssetCollectionModel();
parent::__construct();
}
/**
* @return AssetCollectionRow[]
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
* @return AssetCollectionRow
*/
public function getRow() {
$dataRow = parent::getRow();
$row = $this->getModelRow($dataRow);
return $row;
}
/**
* @return AssetCollectionRow
*/
public function getRowById($id) {
return parent::getRowById($id);
}
private function getModelRow($dataRow) {
$row = new AssetCollectionRow($dataRow, $this->model, $this->multiLanguage);
$row->model = $this->model;
return $row;
}
}