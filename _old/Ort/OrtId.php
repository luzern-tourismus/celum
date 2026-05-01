<?php
namespace LuzernTourismus\Celum\Data\Ort;
use Nemundo\Model\Id\AbstractModelIdValue;
class OrtId extends AbstractModelIdValue {
/**
* @var OrtModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new OrtModel();
}
}