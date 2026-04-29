<?php
namespace LuzernTourismus\Celum\Data\Collection;
class CollectionModel extends \Nemundo\Model\Definition\Model\AbstractModel {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $collection;

/**
* @var \Nemundo\Model\Type\External\Id\NumberExternalIdType
*/
public $collectionTypeId;

/**
* @var \LuzernTourismus\Celum\Data\CollectionType\CollectionTypeExternalType
*/
public $collectionType;

protected function loadModel() {
$this->tableName = "celum_collection";
$this->aliasTableName = "celum_collection";
$this->label = "Collection";

$this->primaryIndex = new \Nemundo\Db\Index\NumberIdPrimaryIndex();

$this->id = new \Nemundo\Model\Type\Id\IdType($this);
$this->id->tableName = "celum_collection";
$this->id->externalTableName = "celum_collection";
$this->id->fieldName = "id";
$this->id->aliasFieldName = "celum_collection_id";
$this->id->label = "Id";
$this->id->allowNullValue = false;

$this->collection = new \Nemundo\Model\Type\Text\TextType($this);
$this->collection->tableName = "celum_collection";
$this->collection->externalTableName = "celum_collection";
$this->collection->fieldName = "collection";
$this->collection->aliasFieldName = "celum_collection_collection";
$this->collection->label = "Collection";
$this->collection->allowNullValue = false;
$this->collection->length = 255;

$this->collectionTypeId = new \Nemundo\Model\Type\External\Id\NumberExternalIdType($this);
$this->collectionTypeId->tableName = "celum_collection";
$this->collectionTypeId->fieldName = "collection_type";
$this->collectionTypeId->aliasFieldName = "celum_collection_collection_type";
$this->collectionTypeId->label = "Collection Type";
$this->collectionTypeId->allowNullValue = false;

}
public function loadCollectionType() {
if ($this->collectionType == null) {
$this->collectionType = new \LuzernTourismus\Celum\Data\CollectionType\CollectionTypeExternalType($this, "celum_collection_collection_type");
$this->collectionType->tableName = "celum_collection";
$this->collectionType->fieldName = "collection_type";
$this->collectionType->aliasFieldName = "celum_collection_collection_type";
$this->collectionType->label = "Collection Type";
}
return $this;
}
}