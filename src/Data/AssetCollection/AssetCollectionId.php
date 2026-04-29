<?php
namespace LuzernTourismus\Celum\Data\AssetCollection;
use Nemundo\Model\Id\AbstractModelIdValue;
class AssetCollectionId extends AbstractModelIdValue {
/**
* @var AssetCollectionModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new AssetCollectionModel();
}
}