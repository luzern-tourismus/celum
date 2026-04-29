<?php
namespace LuzernTourismus\Celum\Data\AssetCollectionPath;
class AssetCollectionPathPaginationReader extends \Nemundo\Model\Reader\AbstractPaginationModelDataReader {
/**
* @var AssetCollectionPathModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new AssetCollectionPathModel();
}
/**
* @return AssetCollectionPathRow[]
*/
public function getData() {
$list = [];
foreach (parent::getData() as $dataRow) {
$row = new AssetCollectionPathRow($dataRow, $this->model);
$list[] = $row;
}
return $list;
}
}