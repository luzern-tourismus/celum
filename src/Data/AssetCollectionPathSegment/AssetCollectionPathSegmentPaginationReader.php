<?php
namespace LuzernTourismus\Celum\Data\AssetCollectionPathSegment;
class AssetCollectionPathSegmentPaginationReader extends \Nemundo\Model\Reader\AbstractPaginationModelDataReader {
/**
* @var AssetCollectionPathSegmentModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new AssetCollectionPathSegmentModel();
}
/**
* @return AssetCollectionPathSegmentRow[]
*/
public function getData() {
$list = [];
foreach (parent::getData() as $dataRow) {
$row = new AssetCollectionPathSegmentRow($dataRow, $this->model);
$list[] = $row;
}
return $list;
}
}