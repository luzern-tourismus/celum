<?php
namespace LuzernTourismus\Celum\Data\AssetCollectionPath;
class AssetCollectionPathCount extends \Nemundo\Model\Count\AbstractModelDataCount {
/**
* @var AssetCollectionPathModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new AssetCollectionPathModel();
}
}