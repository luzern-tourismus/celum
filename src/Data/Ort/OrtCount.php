<?php
namespace LuzernTourismus\Celum\Data\Ort;
class OrtCount extends \Nemundo\Model\Count\AbstractModelDataCount {
/**
* @var OrtModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new OrtModel();
}
}