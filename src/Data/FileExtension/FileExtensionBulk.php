<?php
namespace LuzernTourismus\Celum\Data\FileExtension;
class FileExtensionBulk extends \Nemundo\Model\Data\AbstractModelDataBulk {
/**
* @var FileExtensionModel
*/
protected $model;

/**
* @var string
*/
public $fileExtension;

public function __construct() {
parent::__construct();
$this->model = new FileExtensionModel();
}
public function save() {
$this->typeValueList->setModelValue($this->model->fileExtension, $this->fileExtension);
$id = parent::save();
return $id;
}
}