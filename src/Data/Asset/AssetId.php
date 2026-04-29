<?php
namespace LuzernTourismus\Celum\Data\Asset;
use Nemundo\Model\Id\AbstractModelIdValue;
class AssetId extends AbstractModelIdValue {
/**
* @var AssetModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new AssetModel();
}
}