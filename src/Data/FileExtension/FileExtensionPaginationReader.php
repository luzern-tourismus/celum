<?php
namespace LuzernTourismus\Celum\Data\FileExtension;
class FileExtensionPaginationReader extends \Nemundo\Model\Reader\AbstractPaginationModelDataReader {
/**
* @var FileExtensionModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new FileExtensionModel();
}
/**
* @return FileExtensionRow[]
*/
public function getData() {
$list = [];
foreach (parent::getData() as $dataRow) {
$row = new FileExtensionRow($dataRow, $this->model);
$list[] = $row;
}
return $list;
}
}