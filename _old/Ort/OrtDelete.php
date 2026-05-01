<?php
namespace LuzernTourismus\Celum\Data\Ort;
class OrtDelete extends \Nemundo\Model\Delete\AbstractModelDelete {
/**
* @var OrtModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new OrtModel();
}
}