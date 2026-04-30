<?php
namespace LuzernTourismus\Celum\Data\Asset;
class AssetExternalType extends \Nemundo\Model\Type\External\ExternalType {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $name;

/**
* @var \Nemundo\Model\Type\Text\LargeTextType
*/
public $description;

/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $fileExtensionId;

/**
* @var \LuzernTourismus\Celum\Data\FileExtension\FileExtensionExternalType
*/
public $fileExtension;

/**
* @var \Nemundo\Model\Type\Text\LargeTextType
*/
public $caption;

/**
* @var \Nemundo\Model\Type\Text\LargeTextType
*/
public $creator;

protected function loadExternalType() {
parent::loadExternalType();
$this->externalModelClassName = AssetModel::class;
$this->externalTableName = "celum_asset";
$this->aliasTableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id = new \Nemundo\Model\Type\Id\IdType();
$this->id->fieldName = "id";
$this->id->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id->externalTableName = $this->externalTableName;
$this->id->aliasFieldName = $this->id->tableName . "_" . $this->id->fieldName;
$this->id->label = "Id";
$this->addType($this->id);

$this->name = new \Nemundo\Model\Type\Text\TextType();
$this->name->fieldName = "name";
$this->name->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->name->externalTableName = $this->externalTableName;
$this->name->aliasFieldName = $this->name->tableName . "_" . $this->name->fieldName;
$this->name->label = "Name";
$this->addType($this->name);

$this->description = new \Nemundo\Model\Type\Text\LargeTextType();
$this->description->fieldName = "description";
$this->description->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->description->externalTableName = $this->externalTableName;
$this->description->aliasFieldName = $this->description->tableName . "_" . $this->description->fieldName;
$this->description->label = "Description";
$this->addType($this->description);

$this->fileExtensionId = new \Nemundo\Model\Type\Id\IdType();
$this->fileExtensionId->fieldName = "file_extension";
$this->fileExtensionId->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->fileExtensionId->aliasFieldName = $this->fileExtensionId->tableName ."_".$this->fileExtensionId->fieldName;
$this->fileExtensionId->label = "File Extension";
$this->addType($this->fileExtensionId);

$this->caption = new \Nemundo\Model\Type\Text\LargeTextType();
$this->caption->fieldName = "caption";
$this->caption->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->caption->externalTableName = $this->externalTableName;
$this->caption->aliasFieldName = $this->caption->tableName . "_" . $this->caption->fieldName;
$this->caption->label = "Caption";
$this->addType($this->caption);

$this->creator = new \Nemundo\Model\Type\Text\LargeTextType();
$this->creator->fieldName = "creator";
$this->creator->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->creator->externalTableName = $this->externalTableName;
$this->creator->aliasFieldName = $this->creator->tableName . "_" . $this->creator->fieldName;
$this->creator->label = "Creator";
$this->addType($this->creator);

}
public function loadFileExtension() {
if ($this->fileExtension == null) {
$this->fileExtension = new \LuzernTourismus\Celum\Data\FileExtension\FileExtensionExternalType(null, $this->parentFieldName . "_file_extension");
$this->fileExtension->fieldName = "file_extension";
$this->fileExtension->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->fileExtension->aliasFieldName = $this->fileExtension->tableName ."_".$this->fileExtension->fieldName;
$this->fileExtension->label = "File Extension";
$this->addType($this->fileExtension);
}
return $this;
}
}