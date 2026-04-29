<?php
namespace LuzernTourismus\Celum\Data\Collection;
class CollectionExternalType extends \Nemundo\Model\Type\External\ExternalType {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $collection;

/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $collectionTypeId;

/**
* @var \LuzernTourismus\Celum\Data\CollectionType\CollectionTypeExternalType
*/
public $collectionType;

protected function loadExternalType() {
parent::loadExternalType();
$this->externalModelClassName = CollectionModel::class;
$this->externalTableName = "celum_collection";
$this->aliasTableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id = new \Nemundo\Model\Type\Id\IdType();
$this->id->fieldName = "id";
$this->id->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id->externalTableName = $this->externalTableName;
$this->id->aliasFieldName = $this->id->tableName . "_" . $this->id->fieldName;
$this->id->label = "Id";
$this->addType($this->id);

$this->collection = new \Nemundo\Model\Type\Text\TextType();
$this->collection->fieldName = "collection";
$this->collection->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->collection->externalTableName = $this->externalTableName;
$this->collection->aliasFieldName = $this->collection->tableName . "_" . $this->collection->fieldName;
$this->collection->label = "Collection";
$this->addType($this->collection);

$this->collectionTypeId = new \Nemundo\Model\Type\Id\IdType();
$this->collectionTypeId->fieldName = "collection_type";
$this->collectionTypeId->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->collectionTypeId->aliasFieldName = $this->collectionTypeId->tableName ."_".$this->collectionTypeId->fieldName;
$this->collectionTypeId->label = "Collection Type";
$this->addType($this->collectionTypeId);

}
public function loadCollectionType() {
if ($this->collectionType == null) {
$this->collectionType = new \LuzernTourismus\Celum\Data\CollectionType\CollectionTypeExternalType(null, $this->parentFieldName . "_collection_type");
$this->collectionType->fieldName = "collection_type";
$this->collectionType->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->collectionType->aliasFieldName = $this->collectionType->tableName ."_".$this->collectionType->fieldName;
$this->collectionType->label = "Collection Type";
$this->addType($this->collectionType);
}
return $this;
}
}