<?php
namespace LuzernTourismus\Celum\Data\AssetCollectionPathSegment;
class AssetCollectionPathSegmentCount extends \Nemundo\Model\Count\AbstractModelDataCount {
/**
* @var AssetCollectionPathSegmentModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new AssetCollectionPathSegmentModel();
}
}