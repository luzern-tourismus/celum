<?php
namespace LuzernTourismus\Celum\Data\AssetCollection;
class AssetCollectionCount extends \Nemundo\Model\Count\AbstractModelDataCount {
/**
* @var AssetCollectionModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new AssetCollectionModel();
}
}