<?php
namespace LuzernTourismus\Celum\Data\AssetCollection;
class AssetCollectionExternalType extends \Nemundo\Model\Type\External\ExternalType {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $assetId;

/**
* @var \LuzernTourismus\Celum\Data\Asset\AssetExternalType
*/
public $asset;

/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $collectionId;

/**
* @var \LuzernTourismus\Celum\Data\Collection\CollectionExternalType
*/
public $collection;

protected function loadExternalType() {
parent::loadExternalType();
$this->externalModelClassName = AssetCollectionModel::class;
$this->externalTableName = "celum_asset_collection";
$this->aliasTableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id = new \Nemundo\Model\Type\Id\IdType();
$this->id->fieldName = "id";
$this->id->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id->externalTableName = $this->externalTableName;
$this->id->aliasFieldName = $this->id->tableName . "_" . $this->id->fieldName;
$this->id->label = "Id";
$this->addType($this->id);

$this->assetId = new \Nemundo\Model\Type\Id\IdType();
$this->assetId->fieldName = "asset";
$this->assetId->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->assetId->aliasFieldName = $this->assetId->tableName ."_".$this->assetId->fieldName;
$this->assetId->label = "Asset";
$this->addType($this->assetId);

$this->collectionId = new \Nemundo\Model\Type\Id\IdType();
$this->collectionId->fieldName = "collection";
$this->collectionId->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->collectionId->aliasFieldName = $this->collectionId->tableName ."_".$this->collectionId->fieldName;
$this->collectionId->label = "Collection";
$this->addType($this->collectionId);

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