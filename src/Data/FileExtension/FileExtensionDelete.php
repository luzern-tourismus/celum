<?php
namespace LuzernTourismus\Celum\Data\FileExtension;
class FileExtensionDelete extends \Nemundo\Model\Delete\AbstractModelDelete {
/**
* @var FileExtensionModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new FileExtensionModel();
}
}