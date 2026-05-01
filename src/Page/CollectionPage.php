<?php

namespace LuzernTourismus\Celum\Page;

use LuzernTourismus\Celum\Com\Tab\CelumTab;
use LuzernTourismus\Celum\Data\AssetCollectionPathSegment\AssetCollectionPathSegmentReader;
use LuzernTourismus\Celum\Reader\Collection\CollectionDataReader;
use Nemundo\Admin\Com\Layout\AdminFlexboxLayout;
use Nemundo\Admin\Com\Table\AdminTable;
use Nemundo\Admin\Com\Table\AdminTableHeader;
use Nemundo\Admin\Com\Table\Row\AdminTableRow;
use Nemundo\Com\Template\AbstractTemplateDocument;
use Nemundo\Html\Paragraph\Paragraph;

class CollectionPage extends AbstractTemplateDocument
{
    public function getContent()
    {

        $layout = new AdminFlexboxLayout($this);
        new CelumTab($layout);

        $p = new Paragraph($layout);

        $table = new AdminTable($layout);

        $collectionReader = new CollectionDataReader();
        $collectionReader->orderByCollection();

        $p->content = $collectionReader->getTotalCount() . ' collections found';

        (new AdminTableHeader($table))
            ->addText($collectionReader->model->id->label)
            ->addText($collectionReader->model->collection->label)
            ->addText($collectionReader->model->collectionType->label)
            ->addText($collectionReader->model->parent->label);

        foreach ($collectionReader->getData() as $collectionRow) {

            /*$path = '';

            $reader = new AssetCollectionPathSegmentReader();
            $reader->model->loadAssetCollectionPath();
            $reader->model->assetCollectionPath->loadCollectionType();
            $reader->filter->andEqual($reader->model->collectionId, $collectionRow->id);
            foreach ($reader->getData() as $pathSegmentRow) {
                $path .= $pathSegmentRow->assetCollectionPath->collectionType->collectionType;
            }*/


            (new AdminTableRow($table))
                ->addText($collectionRow->id)
                ->addText($collectionRow->collection)
                //->addText($path)
                ->addText($collectionRow->collectionType->collectionType)
                ->addText($collectionRow->parent->collection);

        }

        return parent::getContent();
    }
}