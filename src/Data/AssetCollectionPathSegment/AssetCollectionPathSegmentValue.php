<?php
namespace LuzernTourismus\Celum\Data\AssetCollectionPathSegment;
class AssetCollectionPathSegmentValue extends \Nemundo\Model\Value\AbstractModelDataValue {
/**
* @var AssetCollectionPathSegmentModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new AssetCollectionPathSegmentModel();
}
}