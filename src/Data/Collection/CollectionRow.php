<?php
namespace LuzernTourismus\Celum\Data\Collection;
class CollectionRow extends \Nemundo\Model\Row\AbstractModelDataRow {
/**
* @var \Nemundo\Model\Row\AbstractModelDataRow
*/
private $row;

/**
* @var CollectionModel
*/
public $model;

/**
* @var string
*/
public $id;

/**
* @var string
*/
public $collection;

/**
* @var int
*/
public $collectionTypeId;

/**
* @var \LuzernTourismus\Celum\Data\CollectionType\CollectionTypeRow
*/
public $collectionType;

/**
* @var int
*/
public $parentId;

/**
* @var \LuzernTourismus\Celum\Data\Collection\CollectionRow
*/
public $parent;

public function __construct(\Nemundo\Db\Row\AbstractDataRow $row, $model, $multiLanguage = false) {
parent::__construct($row->getData());
$this->row = $row;
$this->id = $this->getModelValue($model->id);
$this->collection = $this->getModelValue($model->collection);
$this->collectionTypeId = intval($this->getModelValue($model->collectionTypeId));
if ($model->collectionType !== null) {
$this->loadLuzernTourismusCelumDataCollectionTypeCollectionTypecollectionTypeRow($model->collectionType);
}
$this->parentId = intval($this->getModelValue($model->parentId));
if ($model->parent !== null) {
$this->loadLuzernTourismusCelumDataCollectionCollectionparentRow($model->parent);
}
}
private function loadLuzernTourismusCelumDataCollectionTypeCollectionTypecollectionTypeRow($model) {
$this->collectionType = new \LuzernTourismus\Celum\Data\CollectionType\CollectionTypeRow($this->row, $model);
}
private function loadLuzernTourismusCelumDataCollectionCollectionparentRow($model) {
$this->parent = new \LuzernTourismus\Celum\Data\Collection\CollectionRow($this->row, $model);
}
}