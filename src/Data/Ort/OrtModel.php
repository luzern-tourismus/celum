<?php
namespace LuzernTourismus\Celum\Data\Ort;
class OrtModel extends \Nemundo\Model\Definition\Model\AbstractModel {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\External\Id\NumberExternalIdType
*/
public $ortId;

/**
* @var \LuzernTourismus\Celum\Data\Collection\CollectionExternalType
*/
public $ort;

protected function loadModel() {
$this->tableName = "celum_ort";
$this->aliasTableName = "celum_ort";
$this->label = "Ort";

$this->primaryIndex = new \Nemundo\Db\Index\AutoIncrementIdPrimaryIndex();

$this->id = new \Nemundo\Model\Type\Id\IdType($this);
$this->id->tableName = "celum_ort";
$this->id->externalTableName = "celum_ort";
$this->id->fieldName = "id";
$this->id->aliasFieldName = "celum_ort_id";
$this->id->label = "Id";
$this->id->allowNullValue = false;

$this->ortId = new \Nemundo\Model\Type\External\Id\NumberExternalIdType($this);
$this->ortId->tableName = "celum_ort";
$this->ortId->fieldName = "ort";
$this->ortId->aliasFieldName = "celum_ort_ort";
$this->ortId->label = "Ort";
$this->ortId->allowNullValue = false;

$index = new \Nemundo\Model\Definition\Index\ModelUniqueIndex($this);
$index->indexName = "ort";
$index->addType($this->ortId);

}
public function loadOrt() {
if ($this->ort == null) {
$this->ort = new \LuzernTourismus\Celum\Data\Collection\CollectionExternalType($this, "celum_ort_ort");
$this->ort->tableName = "celum_ort";
$this->ort->fieldName = "ort";
$this->ort->aliasFieldName = "celum_ort_ort";
$this->ort->label = "Ort";
}
return $this;
}
}