<?php
namespace LuzernTourismus\Celum\Data\AssetCollectionPathSegment;
class AssetCollectionPathSegmentReader extends \Nemundo\Model\Reader\ModelDataReader {
/**
* @var AssetCollectionPathSegmentModel
*/
public $model;

public function __construct() {
$this->model = new AssetCollectionPathSegmentModel();
parent::__construct();
}
/**
* @return AssetCollectionPathSegmentRow[]
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
* @return AssetCollectionPathSegmentRow
*/
public function getRow() {
$dataRow = parent::getRow();
$row = $this->getModelRow($dataRow);
return $row;
}
/**
* @return AssetCollectionPathSegmentRow
*/
public function getRowById($id) {
return parent::getRowById($id);
}
private function getModelRow($dataRow) {
$row = new AssetCollectionPathSegmentRow($dataRow, $this->model, $this->multiLanguage);
$row->model = $this->model;
return $row;
}
}