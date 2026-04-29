<?php
namespace LuzernTourismus\Celum\Data\AssetCollectionPath;
use Nemundo\Model\Id\AbstractModelIdValue;
class AssetCollectionPathId extends AbstractModelIdValue {
/**
* @var AssetCollectionPathModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new AssetCollectionPathModel();
}
}