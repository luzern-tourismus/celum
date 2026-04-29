<?php
namespace LuzernTourismus\Celum\Data\CollectionType;
class CollectionTypeExternalType extends \Nemundo\Model\Type\External\ExternalType {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $collectionType;

protected function loadExternalType() {
parent::loadExternalType();
$this->externalModelClassName = CollectionTypeModel::class;
$this->externalTableName = "celum_collection_type";
$this->aliasTableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id = new \Nemundo\Model\Type\Id\IdType();
$this->id->fieldName = "id";
$this->id->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id->externalTableName = $this->externalTableName;
$this->id->aliasFieldName = $this->id->tableName . "_" . $this->id->fieldName;
$this->id->label = "Id";
$this->addType($this->id);

$this->collectionType = new \Nemundo\Model\Type\Text\TextType();
$this->collectionType->fieldName = "collection_type";
$this->collectionType->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->collectionType->externalTableName = $this->externalTableName;
$this->collectionType->aliasFieldName = $this->collectionType->tableName . "_" . $this->collectionType->fieldName;
$this->collectionType->label = "Collection Type";
$this->addType($this->collectionType);

}
}