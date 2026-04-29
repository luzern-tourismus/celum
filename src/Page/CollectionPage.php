<?php

namespace LuzernTourismus\Celum\Page;

use LuzernTourismus\Celum\Reader\Collection\CollectionDataReader;
use Nemundo\Admin\Com\Layout\AdminFlexboxLayout;
use Nemundo\Admin\Com\Table\AdminTable;
use Nemundo\Admin\Com\Table\AdminTableHeader;
use Nemundo\Admin\Com\Table\Row\AdminTableRow;
use Nemundo\Com\Template\AbstractTemplateDocument;
use Nemundo\Html\Paragraph\Paragraph;
use LuzernTourismus\Celum\Com\Tab\CelumTab;
use LuzernTourismus\Celum\Data\Collection\CollectionReader;

class CollectionPage extends AbstractTemplateDocument
{
    public function getContent()
    {

        $layout = new AdminFlexboxLayout($this);
        new CelumTab($layout);

        $p = new Paragraph($layout);

        $table = new AdminTable($layout);

        $reader = new CollectionDataReader();

        $p->content = $reader->getTotalCount().' collections found';

        (new AdminTableHeader($table))
            ->addText($reader->model->id->label)
            ->addText($reader->model->collection->label)
            ->addText($reader->model->collectionType->label);

        foreach ($reader->getData() as $collectionRow) {

            (new AdminTableRow($table))
                ->addText($collectionRow->id)
                ->addText($collectionRow->collection)
                ->addText($collectionRow->collectionType->collectionType);

        }

        return parent::getContent();
    }
}