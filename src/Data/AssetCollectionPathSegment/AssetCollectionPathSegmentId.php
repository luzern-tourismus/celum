<?php
namespace LuzernTourismus\Celum\Data\AssetCollectionPathSegment;
use Nemundo\Model\Id\AbstractModelIdValue;
class AssetCollectionPathSegmentId extends AbstractModelIdValue {
/**
* @var AssetCollectionPathSegmentModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new AssetCollectionPathSegmentModel();
}
}