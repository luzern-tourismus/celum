<?php
namespace LuzernTourismus\Celum\Data\AssetCollectionPath;
class AssetCollectionPathDelete extends \Nemundo\Model\Delete\AbstractModelDelete {
/**
* @var AssetCollectionPathModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new AssetCollectionPathModel();
}
}