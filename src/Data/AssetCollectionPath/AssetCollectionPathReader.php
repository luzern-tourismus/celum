<?php
namespace LuzernTourismus\Celum\Data\AssetCollectionPath;
class AssetCollectionPathReader extends \Nemundo\Model\Reader\ModelDataReader {
/**
* @var AssetCollectionPathModel
*/
public $model;

public function __construct() {
$this->model = new AssetCollectionPathModel();
parent::__construct();
}
/**
* @return AssetCollectionPathRow[]
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
* @return AssetCollectionPathRow
*/
public function getRow() {
$dataRow = parent::getRow();
$row = $this->getModelRow($dataRow);
return $row;
}
/**
* @return AssetCollectionPathRow
*/
public function getRowById($id) {
return parent::getRowById($id);
}
private function getModelRow($dataRow) {
$row = new AssetCollectionPathRow($dataRow, $this->model, $this->multiLanguage);
$row->model = $this->model;
return $row;
}
}