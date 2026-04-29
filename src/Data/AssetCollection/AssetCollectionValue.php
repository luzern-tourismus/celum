<?php
namespace LuzernTourismus\Celum\Data\AssetCollection;
class AssetCollectionValue extends \Nemundo\Model\Value\AbstractModelDataValue {
/**
* @var AssetCollectionModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new AssetCollectionModel();
}
}