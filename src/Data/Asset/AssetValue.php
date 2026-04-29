<?php
namespace LuzernTourismus\Celum\Data\Asset;
class AssetValue extends \Nemundo\Model\Value\AbstractModelDataValue {
/**
* @var AssetModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new AssetModel();
}
}