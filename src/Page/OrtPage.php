<?php

namespace LuzernTourismus\Celum\Page;

use LuzernTourismus\Celum\Com\Tab\CelumTab;
use LuzernTourismus\Celum\Data\Ort\OrtReader;
use LuzernTourismus\Celum\Reader\Collection\CollectionDataReader;
use Nemundo\Admin\Com\Layout\AdminFlexboxLayout;
use Nemundo\Admin\Com\Table\AdminTable;
use Nemundo\Admin\Com\Table\AdminTableHeader;
use Nemundo\Admin\Com\Table\Row\AdminTableRow;
use Nemundo\Com\Template\AbstractTemplateDocument;
use Nemundo\Html\Paragraph\Paragraph;

class OrtPage extends AbstractTemplateDocument
{
    public function getContent()
    {

        $layout = new AdminFlexboxLayout($this);
        new CelumTab($layout);

        $p = new Paragraph($layout);

        $table = new AdminTable($layout);

        $reader = new OrtReader();
        $reader->model->loadOrt();

        $p->content = $reader->getTotalCount().' collections found';

        (new AdminTableHeader($table))
            ->addText($reader->model->id->label)
            ->addText($reader->model->ort->label);
            //->addText($reader->model->collectionType->label);

        foreach ($reader->getData() as $collectionRow) {

            (new AdminTableRow($table))
                ->addText($collectionRow->id)
                ->addText($collectionRow->ort->collection);
                //->addText($collectionRow->collectionType->collectionType);

        }


        return parent::getContent();
    }
}