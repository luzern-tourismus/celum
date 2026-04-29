<?php
namespace LuzernTourismus\Celum\Data\FileExtension;
class FileExtensionCount extends \Nemundo\Model\Count\AbstractModelDataCount {
/**
* @var FileExtensionModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new FileExtensionModel();
}
}