<?php
namespace LuzernTourismus\Celum\Data\Ort;
class OrtRow extends \Nemundo\Model\Row\AbstractModelDataRow {
/**
* @var \Nemundo\Model\Row\AbstractModelDataRow
*/
private $row;

/**
* @var OrtModel
*/
public $model;

/**
* @var string
*/
public $id;

/**
* @var int
*/
public $ortId;

/**
* @var \LuzernTourismus\Celum\Data\Collection\CollectionRow
*/
public $ort;

public function __construct(\Nemundo\Db\Row\AbstractDataRow $row, $model, $multiLanguage = false) {
parent::__construct($row->getData());
$this->row = $row;
$this->id = $this->getModelValue($model->id);
$this->ortId = intval($this->getModelValue($model->ortId));
if ($model->ort !== null) {
$this->loadLuzernTourismusCelumDataCollectionCollectionortRow($model->ort);
}
}
private function loadLuzernTourismusCelumDataCollectionCollectionortRow($model) {
$this->ort = new \LuzernTourismus\Celum\Data\Collection\CollectionRow($this->row, $model);
}
}