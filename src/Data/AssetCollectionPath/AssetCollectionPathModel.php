<?php
namespace LuzernTourismus\Celum\Data\AssetCollectionPath;
class AssetCollectionPathModel extends \Nemundo\Model\Definition\Model\AbstractModel {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\External\Id\NumberExternalIdType
*/
public $collectionTypeId;

/**
* @var \LuzernTourismus\Celum\Data\CollectionType\CollectionTypeExternalType
*/
public $collectionType;

/**
* @var \Nemundo\Model\Type\External\Id\NumberExternalIdType
*/
public $assetId;

/**
* @var \LuzernTourismus\Celum\Data\Asset\AssetExternalType
*/
public $asset;

protected function loadModel() {
$this->tableName = "celum_asset_collection_path";
$this->aliasTableName = "celum_asset_collection_path";
$this->label = "Asset Collection Path";

$this->primaryIndex = new \Nemundo\Db\Index\AutoIncrementIdPrimaryIndex();

$this->id = new \Nemundo\Model\Type\Id\IdType($this);
$this->id->tableName = "celum_asset_collection_path";
$this->id->externalTableName = "celum_asset_collection_path";
$this->id->fieldName = "id";
$this->id->aliasFieldName = "celum_asset_collection_path_id";
$this->id->label = "Id";
$this->id->allowNullValue = false;

$this->collectionTypeId = new \Nemundo\Model\Type\External\Id\NumberExternalIdType($this);
$this->collectionTypeId->tableName = "celum_asset_collection_path";
$this->collectionTypeId->fieldName = "collection_type";
$this->collectionTypeId->aliasFieldName = "celum_asset_collection_path_collection_type";
$this->collectionTypeId->label = "Collection Type";
$this->collectionTypeId->allowNullValue = false;

$this->assetId = new \Nemundo\Model\Type\External\Id\NumberExternalIdType($this);
$this->assetId->tableName = "celum_asset_collection_path";
$this->assetId->fieldName = "asset";
$this->assetId->aliasFieldName = "celum_asset_collection_path_asset";
$this->assetId->label = "Asset";
$this->assetId->allowNullValue = false;

$index = new \Nemundo\Model\Definition\Index\ModelIndex($this);
$index->indexName = "asset";
$index->addType($this->assetId);

}
public function loadCollectionType() {
if ($this->collectionType == null) {
$this->collectionType = new \LuzernTourismus\Celum\Data\CollectionType\CollectionTypeExternalType($this, "celum_asset_collection_path_collection_type");
$this->collectionType->tableName = "celum_asset_collection_path";
$this->collectionType->fieldName = "collection_type";
$this->collectionType->aliasFieldName = "celum_asset_collection_path_collection_type";
$this->collectionType->label = "Collection Type";
}
return $this;
}
public function loadAsset() {
if ($this->asset == null) {
$this->asset = new \LuzernTourismus\Celum\Data\Asset\AssetExternalType($this, "celum_asset_collection_path_asset");
$this->asset->tableName = "celum_asset_collection_path";
$this->asset->fieldName = "asset";
$this->asset->aliasFieldName = "celum_asset_collection_path_asset";
$this->asset->label = "Asset";
}
return $this;
}
}