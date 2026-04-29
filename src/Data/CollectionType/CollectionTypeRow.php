<?php
namespace LuzernTourismus\Celum\Data\CollectionType;
class CollectionTypeRow extends \Nemundo\Model\Row\AbstractModelDataRow {
/**
* @var \Nemundo\Model\Row\AbstractModelDataRow
*/
private $row;

/**
* @var CollectionTypeModel
*/
public $model;

/**
* @var string
*/
public $id;

/**
* @var string
*/
public $collectionType;

public function __construct(\Nemundo\Db\Row\AbstractDataRow $row, $model, $multiLanguage = false) {
parent::__construct($row->getData());
$this->row = $row;
$this->id = $this->getModelValue($model->id);
$this->collectionType = $this->getModelValue($model->collectionType);
}
}