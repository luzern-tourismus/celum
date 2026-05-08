<?php

namespace LuzernTourismus\Celum\Page;

use LuzernTourismus\Celum\Com\Tab\CelumTab;
use LuzernTourismus\Celum\Reader\Asset\AssetDataReader;
use LuzernTourismus\Celum\Reader\Collection\CollectionDataReader;
use Nemundo\Admin\Com\Layout\AdminFlexboxLayout;
use Nemundo\Admin\Com\Table\AdminTable;
use Nemundo\Admin\Com\Table\AdminTableHeader;
use Nemundo\Admin\Com\Table\Row\AdminTableRow;
use Nemundo\Com\Template\AbstractTemplateDocument;
use Nemundo\Db\Sql\Field\CountField;
use Nemundo\Html\Paragraph\Paragraph;

class FileExtensionPage extends AbstractTemplateDocument
{
    public function getContent()
    {

        $layout = new AdminFlexboxLayout($this);
        new CelumTab($layout);

        $p = new Paragraph($layout);

        $table = new AdminTable($layout);

        $assetReader = new AssetDataReader();
        $assetReader->addGroup($assetReader->model->fileExtensionId);

        $count = new CountField($assetReader);

        $p->content = $assetReader->getTotalCount() . ' collections found';

        (new AdminTableHeader($table))
            ->addText($assetReader->model->fileExtension->label)
            ->addText('Count');

        foreach ($assetReader->getData() as $assetRow) {

            (new AdminTableRow($table))
                ->addText($assetRow->fileExtension->fileExtension)
                ->addText($assetRow->getModelValue($count));

        }

        return parent::getContent();
    }
}