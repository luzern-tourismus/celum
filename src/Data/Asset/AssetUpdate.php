<?php
namespace LuzernTourismus\Celum\Data\Asset;
use Nemundo\Model\Data\AbstractModelUpdate;
class AssetUpdate extends AbstractModelUpdate {
/**
* @var AssetModel
*/
public $model;

/**
* @var string
*/
public $name;

/**
* @var string
*/
public $previewUrl;

/**
* @var string
*/
public $description;

/**
* @var string
*/
public $fileExtensionId;

/**
* @var bool
*/
public $hasPreviewUrl;

public function __construct() {
parent::__construct();
$this->model = new AssetModel();
}
public function update() {
$this->typeValueList->setModelValue($this->model->name, $this->name);
$this->typeValueList->setModelValue($this->model->previewUrl, $this->previewUrl);
$this->typeValueList->setModelValue($this->model->description, $this->description);
$this->typeValueList->setModelValue($this->model->fileExtensionId, $this->fileExtensionId);
$this->typeValueList->setModelValue($this->model->hasPreviewUrl, $this->hasPreviewUrl);
parent::update();
}
}