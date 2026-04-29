<?php
namespace LuzernTourismus\Celum\Data\CollectionType;
class CollectionTypeModel extends \Nemundo\Model\Definition\Model\AbstractModel {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $collectionType;

protected function loadModel() {
$this->tableName = "celum_collection_type";
$this->aliasTableName = "celum_collection_type";
$this->label = "Collection Type";

$this->primaryIndex = new \Nemundo\Db\Index\NumberIdPrimaryIndex();

$this->id = new \Nemundo\Model\Type\Id\IdType($this);
$this->id->tableName = "celum_collection_type";
$this->id->externalTableName = "celum_collection_type";
$this->id->fieldName = "id";
$this->id->aliasFieldName = "celum_collection_type_id";
$this->id->label = "Id";
$this->id->allowNullValue = false;

$this->collectionType = new \Nemundo\Model\Type\Text\TextType($this);
$this->collectionType->tableName = "celum_collection_type";
$this->collectionType->externalTableName = "celum_collection_type";
$this->collectionType->fieldName = "collection_type";
$this->collectionType->aliasFieldName = "celum_collection_type_collection_type";
$this->collectionType->label = "Collection Type";
$this->collectionType->allowNullValue = false;
$this->collectionType->length = 255;

}
}