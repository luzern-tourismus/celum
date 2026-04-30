<?php
namespace LuzernTourismus\Celum\Data\Asset;
class AssetModel extends \Nemundo\Model\Definition\Model\AbstractModel {
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
* @var \Nemundo\Model\Type\External\Id\NumberExternalIdType
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

protected function loadModel() {
$this->tableName = "celum_asset";
$this->aliasTableName = "celum_asset";
$this->label = "Asset";

$this->primaryIndex = new \Nemundo\Db\Index\NumberIdPrimaryIndex();

$this->id = new \Nemundo\Model\Type\Id\IdType($this);
$this->id->tableName = "celum_asset";
$this->id->externalTableName = "celum_asset";
$this->id->fieldName = "id";
$this->id->aliasFieldName = "celum_asset_id";
$this->id->label = "Id";
$this->id->allowNullValue = false;

$this->name = new \Nemundo\Model\Type\Text\TextType($this);
$this->name->tableName = "celum_asset";
$this->name->externalTableName = "celum_asset";
$this->name->fieldName = "name";
$this->name->aliasFieldName = "celum_asset_name";
$this->name->label = "Name";
$this->name->allowNullValue = false;
$this->name->length = 255;

$this->description = new \Nemundo\Model\Type\Text\LargeTextType($this);
$this->description->tableName = "celum_asset";
$this->description->externalTableName = "celum_asset";
$this->description->fieldName = "description";
$this->description->aliasFieldName = "celum_asset_description";
$this->description->label = "Description";
$this->description->allowNullValue = true;

$this->fileExtensionId = new \Nemundo\Model\Type\External\Id\NumberExternalIdType($this);
$this->fileExtensionId->tableName = "celum_asset";
$this->fileExtensionId->fieldName = "file_extension";
$this->fileExtensionId->aliasFieldName = "celum_asset_file_extension";
$this->fileExtensionId->label = "File Extension";
$this->fileExtensionId->allowNullValue = false;

$this->caption = new \Nemundo\Model\Type\Text\LargeTextType($this);
$this->caption->tableName = "celum_asset";
$this->caption->externalTableName = "celum_asset";
$this->caption->fieldName = "caption";
$this->caption->aliasFieldName = "celum_asset_caption";
$this->caption->label = "Caption";
$this->caption->allowNullValue = true;

$this->creator = new \Nemundo\Model\Type\Text\LargeTextType($this);
$this->creator->tableName = "celum_asset";
$this->creator->externalTableName = "celum_asset";
$this->creator->fieldName = "creator";
$this->creator->aliasFieldName = "celum_asset_creator";
$this->creator->label = "Creator";
$this->creator->allowNullValue = true;

$index = new \Nemundo\Model\Definition\Index\ModelSearchIndex($this);
$index->indexName = "name";
$index->addType($this->name);

}
public function loadFileExtension() {
if ($this->fileExtension == null) {
$this->fileExtension = new \LuzernTourismus\Celum\Data\FileExtension\FileExtensionExternalType($this, "celum_asset_file_extension");
$this->fileExtension->tableName = "celum_asset";
$this->fileExtension->fieldName = "file_extension";
$this->fileExtension->aliasFieldName = "celum_asset_file_extension";
$this->fileExtension->label = "File Extension";
}
return $this;
}
}