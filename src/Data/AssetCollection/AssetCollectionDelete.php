<?php
namespace LuzernTourismus\Celum\Data\AssetCollection;
class AssetCollectionDelete extends \Nemundo\Model\Delete\AbstractModelDelete {
/**
* @var AssetCollectionModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new AssetCollectionModel();
}
}