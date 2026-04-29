<?php
namespace LuzernTourismus\Celum\Data\Asset;
class AssetPaginationReader extends \Nemundo\Model\Reader\AbstractPaginationModelDataReader {
/**
* @var AssetModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new AssetModel();
}
/**
* @return AssetRow[]
*/
public function getData() {
$list = [];
foreach (parent::getData() as $dataRow) {
$row = new AssetRow($dataRow, $this->model);
$list[] = $row;
}
return $list;
}
}