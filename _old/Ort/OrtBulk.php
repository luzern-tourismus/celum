<?php
namespace LuzernTourismus\Celum\Data\Ort;
class OrtBulk extends \Nemundo\Model\Data\AbstractModelDataBulk {
/**
* @var OrtModel
*/
protected $model;

/**
* @var string
*/
public $ortId;

public function __construct() {
parent::__construct();
$this->model = new OrtModel();
}
public function save() {
$this->typeValueList->setModelValue($this->model->ortId, $this->ortId);
$id = parent::save();
return $id;
}
}