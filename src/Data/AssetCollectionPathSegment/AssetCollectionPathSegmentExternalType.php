<?php
namespace LuzernTourismus\Celum\Data\AssetCollectionPathSegment;
class AssetCollectionPathSegmentExternalType extends \Nemundo\Model\Type\External\ExternalType {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $assetCollectionPathId;

/**
* @var \LuzernTourismus\Celum\Data\AssetCollectionPath\AssetCollectionPathExternalType
*/
public $assetCollectionPath;

/**
* @var \Nemundo\Model\Type\Id\IdType
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

protected function loadExternalType() {
parent::loadExternalType();
$this->externalModelClassName = AssetCollectionPathSegmentModel::class;
$this->externalTableName = "celum_asset_collection_path_segment";
$this->aliasTableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id = new \Nemundo\Model\Type\Id\IdType();
$this->id->fieldName = "id";
$this->id->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id->externalTableName = $this->externalTableName;
$this->id->aliasFieldName = $this->id->tableName . "_" . $this->id->fieldName;
$this->id->label = "Id";
$this->addType($this->id);

$this->assetCollectionPathId = new \Nemundo\Model\Type\Id\IdType();
$this->assetCollectionPathId->fieldName = "asset_collection_path";
$this->assetCollectionPathId->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->assetCollectionPathId->aliasFieldName = $this->assetCollectionPathId->tableName ."_".$this->assetCollectionPathId->fieldName;
$this->assetCollectionPathId->label = "Asset Collection Path";
$this->addType($this->assetCollectionPathId);

$this->collectionId = new \Nemundo\Model\Type\Id\IdType();
$this->collectionId->fieldName = "collection";
$this->collectionId->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->collectionId->aliasFieldName = $this->collectionId->tableName ."_".$this->collectionId->fieldName;
$this->collectionId->label = "Collection";
$this->addType($this->collectionId);

$this->itemOrder = new \Nemundo\Model\Type\Number\NumberType();
$this->itemOrder->fieldName = "item_order";
$this->itemOrder->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->itemOrder->externalTableName = $this->externalTableName;
$this->itemOrder->aliasFieldName = $this->itemOrder->tableName . "_" . $this->itemOrder->fieldName;
$this->itemOrder->label = "Item Order";
$this->addType($this->itemOrder);

}
public function loadAssetCollectionPath() {
if ($this->assetCollectionPath == null) {
$this->assetCollectionPath = new \LuzernTourismus\Celum\Data\AssetCollectionPath\AssetCollectionPathExternalType(null, $this->parentFieldName . "_asset_collection_path");
$this->assetCollectionPath->fieldName = "asset_collection_path";
$this->assetCollectionPath->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->assetCollectionPath->aliasFieldName = $this->assetCollectionPath->tableName ."_".$this->assetCollectionPath->fieldName;
$this->assetCollectionPath->label = "Asset Collection Path";
$this->addType($this->assetCollectionPath);
}
return $this;
}
public function loadCollection() {
if ($this->collection == null) {
$this->collection = new \LuzernTourismus\Celum\Data\Collection\CollectionExternalType(null, $this->parentFieldName . "_collection");
$this->collection->fieldName = "collection";
$this->collection->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->collection->aliasFieldName = $this->collection->tableName ."_".$this->collection->fieldName;
$this->collection->label = "Collection";
$this->addType($this->collection);
}
return $this;
}
}