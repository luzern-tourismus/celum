<?php
namespace LuzernTourismus\Celum\Data\Asset;
class AssetRow extends \Nemundo\Model\Row\AbstractModelDataRow {
/**
* @var \Nemundo\Model\Row\AbstractModelDataRow
*/
private $row;

/**
* @var AssetModel
*/
public $model;

/**
* @var string
*/
public $id;

/**
* @var string
*/
public $name;

/**
* @var string
*/
public $description;

/**
* @var int
*/
public $fileExtensionId;

/**
* @var \LuzernTourismus\Celum\Data\FileExtension\FileExtensionRow
*/
public $fileExtension;

public function __construct(\Nemundo\Db\Row\AbstractDataRow $row, $model, $multiLanguage = false) {
parent::__construct($row->getData());
$this->row = $row;
$this->id = $this->getModelValue($model->id);
$this->name = $this->getModelValue($model->name);
$this->description = $this->getModelValue($model->description);
$this->fileExtensionId = intval($this->getModelValue($model->fileExtensionId));
if ($model->fileExtension !== null) {
$this->loadLuzernTourismusCelumDataFileExtensionFileExtensionfileExtensionRow($model->fileExtension);
}
}
private function loadLuzernTourismusCelumDataFileExtensionFileExtensionfileExtensionRow($model) {
$this->fileExtension = new \LuzernTourismus\Celum\Data\FileExtension\FileExtensionRow($this->row, $model);
}
}