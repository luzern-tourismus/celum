<?php
namespace LuzernTourismus\Celum\Data\AssetCollection;
class AssetCollectionPaginationReader extends \Nemundo\Model\Reader\AbstractPaginationModelDataReader {
/**
* @var AssetCollectionModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new AssetCollectionModel();
}
/**
* @return AssetCollectionRow[]
*/
public function getData() {
$list = [];
foreach (parent::getData() as $dataRow) {
$row = new AssetCollectionRow($dataRow, $this->model);
$list[] = $row;
}
return $list;
}
}