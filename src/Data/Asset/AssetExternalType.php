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
public $previewUrl;

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
* @var \Nemundo\Model\Type\Number\YesNoType
*/
public $hasPreviewUrl;

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

$this->previewUrl = new \Nemundo\Model\Type\Text\LargeTextType();
$this->previewUrl->fieldName = "preview_url";
$this->previewUrl->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->previewUrl->externalTableName = $this->externalTableName;
$this->previewUrl->aliasFieldName = $this->previewUrl->tableName . "_" . $this->previewUrl->fieldName;
$this->previewUrl->label = "Preview Url";
$this->addType($this->previewUrl);

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

$this->hasPreviewUrl = new \Nemundo\Model\Type\Number\YesNoType();
$this->hasPreviewUrl->fieldName = "has_preview_url";
$this->hasPreviewUrl->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->hasPreviewUrl->externalTableName = $this->externalTableName;
$this->hasPreviewUrl->aliasFieldName = $this->hasPreviewUrl->tableName . "_" . $this->hasPreviewUrl->fieldName;
$this->hasPreviewUrl->label = "Has Preview Url";
$this->addType($this->hasPreviewUrl);

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