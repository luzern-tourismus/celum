<?php
namespace LuzernTourismus\Celum\Data\FileExtension;
use Nemundo\Model\Data\AbstractModelUpdate;
class FileExtensionUpdate extends AbstractModelUpdate {
/**
* @var FileExtensionModel
*/
public $model;

/**
* @var string
*/
public $fileExtension;

public function __construct() {
parent::__construct();
$this->model = new FileExtensionModel();
}
public function update() {
$this->typeValueList->setModelValue($this->model->fileExtension, $this->fileExtension);
parent::update();
}
}