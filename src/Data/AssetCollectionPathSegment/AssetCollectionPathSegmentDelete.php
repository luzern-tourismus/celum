<?php
namespace LuzernTourismus\Celum\Data\AssetCollectionPathSegment;
class AssetCollectionPathSegmentDelete extends \Nemundo\Model\Delete\AbstractModelDelete {
/**
* @var AssetCollectionPathSegmentModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new AssetCollectionPathSegmentModel();
}
}