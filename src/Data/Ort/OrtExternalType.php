<?php
namespace LuzernTourismus\Celum\Data\Ort;
class OrtExternalType extends \Nemundo\Model\Type\External\ExternalType {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $ortId;

/**
* @var \LuzernTourismus\Celum\Data\Collection\CollectionExternalType
*/
public $ort;

protected function loadExternalType() {
parent::loadExternalType();
$this->externalModelClassName = OrtModel::class;
$this->externalTableName = "celum_ort";
$this->aliasTableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id = new \Nemundo\Model\Type\Id\IdType();
$this->id->fieldName = "id";
$this->id->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id->externalTableName = $this->externalTableName;
$this->id->aliasFieldName = $this->id->tableName . "_" . $this->id->fieldName;
$this->id->label = "Id";
$this->addType($this->id);

$this->ortId = new \Nemundo\Model\Type\Id\IdType();
$this->ortId->fieldName = "ort";
$this->ortId->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->ortId->aliasFieldName = $this->ortId->tableName ."_".$this->ortId->fieldName;
$this->ortId->label = "Ort";
$this->addType($this->ortId);

}
public function loadOrt() {
if ($this->ort == null) {
$this->ort = new \LuzernTourismus\Celum\Data\Collection\CollectionExternalType(null, $this->parentFieldName . "_ort");
$this->ort->fieldName = "ort";
$this->ort->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->ort->aliasFieldName = $this->ort->tableName ."_".$this->ort->fieldName;
$this->ort->label = "Ort";
$this->addType($this->ort);
}
return $this;
}
}