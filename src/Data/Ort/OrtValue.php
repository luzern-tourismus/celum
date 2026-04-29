<?php
namespace LuzernTourismus\Celum\Data\Ort;
class OrtValue extends \Nemundo\Model\Value\AbstractModelDataValue {
/**
* @var OrtModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new OrtModel();
}
}