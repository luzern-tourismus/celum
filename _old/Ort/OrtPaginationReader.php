<?php
namespace LuzernTourismus\Celum\Data\Ort;
class OrtPaginationReader extends \Nemundo\Model\Reader\AbstractPaginationModelDataReader {
/**
* @var OrtModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new OrtModel();
}
/**
* @return OrtRow[]
*/
public function getData() {
$list = [];
foreach (parent::getData() as $dataRow) {
$row = new OrtRow($dataRow, $this->model);
$list[] = $row;
}
return $list;
}
}