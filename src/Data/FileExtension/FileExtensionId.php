<?php
namespace LuzernTourismus\Celum\Data\FileExtension;
use Nemundo\Model\Id\AbstractModelIdValue;
class FileExtensionId extends AbstractModelIdValue {
/**
* @var FileExtensionModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new FileExtensionModel();
}
}