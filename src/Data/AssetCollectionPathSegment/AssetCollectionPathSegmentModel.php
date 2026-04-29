<?php
namespace LuzernTourismus\Celum\Data\AssetCollectionPathSegment;
class AssetCollectionPathSegmentModel extends \Nemundo\Model\Definition\Model\AbstractModel {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\External\Id\NumberExternalIdType
*/
public $assetCollectionPathId;

/**
* @var \LuzernTourismus\Celum\Data\AssetCollectionPath\AssetCollectionPathExternalType
*/
public $assetCollectionPath;

/**
* @var \Nemundo\Model\Type\External\Id\NumberExternalIdType
*/
public $collectionId;

/**
* @var \LuzernTourismus\Celum\Data\Collection\CollectionExternalType
*/
public $collection;

/**
* @var \Nemundo\Model\Type\Number\NumberType
*/
public $itemOrder;

protected function loadModel() {
$this->tableName = "celum_asset_collection_path_segment";
$this->aliasTableName = "celum_asset_collection_path_segment";
$this->label = "Asset Collection Path Segment";

$this->primaryIndex = new \Nemundo\Db\Index\AutoIncrementIdPrimaryIndex();

$this->id = new \Nemundo\Model\Type\Id\IdType($this);
$this->id->tableName = "celum_asset_collection_path_segment";
$this->id->externalTableName = "celum_asset_collection_path_segment";
$this->id->fieldName = "id";
$this->id->aliasFieldName = "celum_asset_collection_path_segment_id";
$this->id->label = "Id";
$this->id->allowNullValue = false;

$this->assetCollectionPathId = new \Nemundo\Model\Type\External\Id\NumberExternalIdType($this);
$this->assetCollectionPathId->tableName = "celum_asset_collection_path_segment";
$this->assetCollectionPathId->fieldName = "asset_collection_path";
$this->assetCollectionPathId->aliasFieldName = "celum_asset_collection_path_segment_asset_collection_path";
$this->assetCollectionPathId->label = "Asset Collection Path";
$this->assetCollectionPathId->allowNullValue = false;

$this->collectionId = new \Nemundo\Model\Type\External\Id\NumberExternalIdType($this);
$this->collectionId->tableName = "celum_asset_collection_path_segment";
$this->collectionId->fieldName = "collection";
$this->collectionId->aliasFieldName = "celum_asset_collection_path_segment_collection";
$this->collectionId->label = "Collection";
$this->collectionId->allowNullValue = false;

$this->itemOrder = new \Nemundo\Model\Type\Number\NumberType($this);
$this->itemOrder->tableName = "celum_asset_collection_path_segment";
$this->itemOrder->externalTableName = "celum_asset_collection_path_segment";
$this->itemOrder->fieldName = "item_order";
$this->itemOrder->aliasFieldName = "celum_asset_collection_path_segment_item_order";
$this->itemOrder->label = "Item Order";
$this->itemOrder->allowNullValue = false;

$index = new \Nemundo\Model\Definition\Index\ModelIndex($this);
$index->indexName = "asset_collection_path";
$index->addType($this->assetCollectionPathId);

}
public function loadAssetCollectionPath() {
if ($this->assetCollectionPath == null) {
$this->assetCollectionPath = new \LuzernTourismus\Celum\Data\AssetCollectionPath\AssetCollectionPathExternalType($this, "celum_asset_collection_path_segment_asset_collection_path");
$this->assetCollectionPath->tableName = "celum_asset_collection_path_segment";
$this->assetCollectionPath->fieldName = "asset_collection_path";
$this->assetCollectionPath->aliasFieldName = "celum_asset_collection_path_segment_asset_collection_path";
$this->assetCollectionPath->label = "Asset Collection Path";
}
return $this;
}
public function loadCollection() {
if ($this->collection == null) {
$this->collection = new \LuzernTourismus\Celum\Data\Collection\CollectionExternalType($this, "celum_asset_collection_path_segment_collection");
$this->collection->tableName = "celum_asset_collection_path_segment";
$this->collection->fieldName = "collection";
$this->collection->aliasFieldName = "celum_asset_collection_path_segment_collection";
$this->collection->label = "Collection";
}
return $this;
}
}