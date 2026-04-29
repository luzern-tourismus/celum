<?php
namespace LuzernTourismus\Celum\Data\AssetCollection;
class AssetCollectionModel extends \Nemundo\Model\Definition\Model\AbstractModel {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\External\Id\NumberExternalIdType
*/
public $assetId;

/**
* @var \LuzernTourismus\Celum\Data\Asset\AssetExternalType
*/
public $asset;

/**
* @var \Nemundo\Model\Type\External\Id\NumberExternalIdType
*/
public $collectionId;

/**
* @var \LuzernTourismus\Celum\Data\Collection\CollectionExternalType
*/
public $collection;

protected function loadModel() {
$this->tableName = "celum_asset_collection";
$this->aliasTableName = "celum_asset_collection";
$this->label = "Asset Collection";

$this->primaryIndex = new \Nemundo\Db\Index\AutoIncrementIdPrimaryIndex();

$this->id = new \Nemundo\Model\Type\Id\IdType($this);
$this->id->tableName = "celum_asset_collection";
$this->id->externalTableName = "celum_asset_collection";
$this->id->fieldName = "id";
$this->id->aliasFieldName = "celum_asset_collection_id";
$this->id->label = "Id";
$this->id->allowNullValue = false;

$this->assetId = new \Nemundo\Model\Type\External\Id\NumberExternalIdType($this);
$this->assetId->tableName = "celum_asset_collection";
$this->assetId->fieldName = "asset";
$this->assetId->aliasFieldName = "celum_asset_collection_asset";
$this->assetId->label = "Asset";
$this->assetId->allowNullValue = false;

$this->collectionId = new \Nemundo\Model\Type\External\Id\NumberExternalIdType($this);
$this->collectionId->tableName = "celum_asset_collection";
$this->collectionId->fieldName = "collection";
$this->collectionId->aliasFieldName = "celum_asset_collection_collection";
$this->collectionId->label = "Collection";
$this->collectionId->allowNullValue = false;

$index = new \Nemundo\Model\Definition\Index\ModelIndex($this);
$index->indexName = "asset";
$index->addType($this->assetId);

}
public function loadAsset() {
if ($this->asset == null) {
$this->asset = new \LuzernTourismus\Celum\Data\Asset\AssetExternalType($this, "celum_asset_collection_asset");
$this->asset->tableName = "celum_asset_collection";
$this->asset->fieldName = "asset";
$this->asset->aliasFieldName = "celum_asset_collection_asset";
$this->asset->label = "Asset";
}
return $this;
}
public function loadCollection() {
if ($this->collection == null) {
$this->collection = new \LuzernTourismus\Celum\Data\Collection\CollectionExternalType($this, "celum_asset_collection_collection");
$this->collection->tableName = "celum_asset_collection";
$this->collection->fieldName = "collection";
$this->collection->aliasFieldName = "celum_asset_collection_collection";
$this->collection->label = "Collection";
}
return $this;
}
}