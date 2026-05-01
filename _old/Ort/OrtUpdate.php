<?php
namespace LuzernTourismus\Celum\Data\Ort;
use Nemundo\Model\Data\AbstractModelUpdate;
class OrtUpdate extends AbstractModelUpdate {
/**
* @var OrtModel
*/
public $model;

/**
* @var string
*/
public $ortId;

public function __construct() {
parent::__construct();
$this->model = new OrtModel();
}
public function update() {
$this->typeValueList->setModelValue($this->model->ortId, $this->ortId);
parent::update();
}
}