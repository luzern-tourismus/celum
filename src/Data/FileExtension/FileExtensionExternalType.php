<?php
namespace LuzernTourismus\Celum\Data\FileExtension;
class FileExtensionExternalType extends \Nemundo\Model\Type\External\ExternalType {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $fileExtension;

protected function loadExternalType() {
parent::loadExternalType();
$this->externalModelClassName = FileExtensionModel::class;
$this->externalTableName = "celum_file_extension";
$this->aliasTableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id = new \Nemundo\Model\Type\Id\IdType();
$this->id->fieldName = "id";
$this->id->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id->externalTableName = $this->externalTableName;
$this->id->aliasFieldName = $this->id->tableName . "_" . $this->id->fieldName;
$this->id->label = "Id";
$this->addType($this->id);

$this->fileExtension = new \Nemundo\Model\Type\Text\TextType();
$this->fileExtension->fieldName = "file_extension";
$this->fileExtension->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->fileExtension->externalTableName = $this->externalTableName;
$this->fileExtension->aliasFieldName = $this->fileExtension->tableName . "_" . $this->fileExtension->fieldName;
$this->fileExtension->label = "File Extension";
$this->addType($this->fileExtension);

}
}