<?php
namespace LuzernTourismus\Celum\Data\FileExtension;
class FileExtensionValue extends \Nemundo\Model\Value\AbstractModelDataValue {
/**
* @var FileExtensionModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new FileExtensionModel();
}
}