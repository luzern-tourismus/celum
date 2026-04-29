<?php
namespace LuzernTourismus\Celum\Data\Asset;
class AssetCount extends \Nemundo\Model\Count\AbstractModelDataCount {
/**
* @var AssetModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new AssetModel();
}
}