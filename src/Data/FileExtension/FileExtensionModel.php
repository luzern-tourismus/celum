<?php
namespace LuzernTourismus\Celum\Data\FileExtension;
class FileExtensionModel extends \Nemundo\Model\Definition\Model\AbstractModel {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $fileExtension;

protected function loadModel() {
$this->tableName = "celum_file_extension";
$this->aliasTableName = "celum_file_extension";
$this->label = "File Extension";

$this->primaryIndex = new \Nemundo\Db\Index\AutoIncrementIdPrimaryIndex();

$this->id = new \Nemundo\Model\Type\Id\IdType($this);
$this->id->tableName = "celum_file_extension";
$this->id->externalTableName = "celum_file_extension";
$this->id->fieldName = "id";
$this->id->aliasFieldName = "celum_file_extension_id";
$this->id->label = "Id";
$this->id->allowNullValue = false;

$this->fileExtension = new \Nemundo\Model\Type\Text\TextType($this);
$this->fileExtension->tableName = "celum_file_extension";
$this->fileExtension->externalTableName = "celum_file_extension";
$this->fileExtension->fieldName = "file_extension";
$this->fileExtension->aliasFieldName = "celum_file_extension_file_extension";
$this->fileExtension->label = "File Extension";
$this->fileExtension->allowNullValue = false;
$this->fileExtension->length = 5;

$index = new \Nemundo\Model\Definition\Index\ModelUniqueIndex($this);
$index->indexName = "file_extension";
$index->addType($this->fileExtension);

}
}