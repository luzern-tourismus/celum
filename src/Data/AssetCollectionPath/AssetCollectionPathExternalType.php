<?php
namespace LuzernTourismus\Celum\Data\AssetCollectionPath;
class AssetCollectionPathExternalType extends \Nemundo\Model\Type\External\ExternalType {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $collectionTypeId;

/**
* @var \LuzernTourismus\Celum\Data\CollectionType\CollectionTypeExternalType
*/
public $collectionType;

/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $assetId;

/**
* @var \LuzernTourismus\Celum\Data\Asset\AssetExternalType
*/
public $asset;

protected function loadExternalType() {
parent::loadExternalType();
$this->externalModelClassName = AssetCollectionPathModel::class;
$this->externalTableName = "celum_asset_collection_path";
$this->aliasTableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id = new \Nemundo\Model\Type\Id\IdType();
$this->id->fieldName = "id";
$this->id->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id->externalTableName = $this->externalTableName;
$this->id->aliasFieldName = $this->id->tableName . "_" . $this->id->fieldName;
$this->id->label = "Id";
$this->addType($this->id);

$this->collectionTypeId = new \Nemundo\Model\Type\Id\IdType();
$this->collectionTypeId->fieldName = "collection_type";
$this->collectionTypeId->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->collectionTypeId->aliasFieldName = $this->collectionTypeId->tableName ."_".$this->collectionTypeId->fieldName;
$this->collectionTypeId->label = "Collection Type";
$this->addType($this->collectionTypeId);

$this->assetId = new \Nemundo\Model\Type\Id\IdType();
$this->assetId->fieldName = "asset";
$this->assetId->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->assetId->aliasFieldName = $this->assetId->tableName ."_".$this->assetId->fieldName;
$this->assetId->label = "Asset";
$this->addType($this->assetId);

}
public function loadCollectionType() {
if ($this->collectionType == null) {
$this->collectionType = new \LuzernTourismus\Celum\Data\CollectionType\CollectionTypeExternalType(null, $this->parentFieldName . "_collection_type");
$this->collectionType->fieldName = "collection_type";
$this->collectionType->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->collectionType->aliasFieldName = $this->collectionType->tableName ."_".$this->collectionType->fieldName;
$this->collectionType->label = "Collection Type";
$this->addType($this->collectionType);
}
return $this;
}
public function loadAsset() {
if ($this->asset == null) {
$this->asset = new \LuzernTourismus\Celum\Data\Asset\AssetExternalType(null, $this->parentFieldName . "_asset");
$this->asset->fieldName = "asset";
$this->asset->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->asset->aliasFieldName = $this->asset->tableName ."_".$this->asset->fieldName;
$this->asset->label = "Asset";
$this->addType($this->asset);
}
return $this;
}
}