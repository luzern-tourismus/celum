<?php
namespace LuzernTourismus\Celum\Data\AssetCollectionPath;
class AssetCollectionPathValue extends \Nemundo\Model\Value\AbstractModelDataValue {
/**
* @var AssetCollectionPathModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new AssetCollectionPathModel();
}
}