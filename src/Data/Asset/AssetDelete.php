<?php
namespace LuzernTourismus\Celum\Data\Asset;
class AssetDelete extends \Nemundo\Model\Delete\AbstractModelDelete {
/**
* @var AssetModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new AssetModel();
}
}