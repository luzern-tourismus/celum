<?php

namespace LuzernTourismus\Celum\Page;

use LuzernTourismus\Celum\Com\ListBox\FileExtensionListBox;
use LuzernTourismus\Celum\Com\Tab\CelumTab;
use LuzernTourismus\Celum\Data\Asset\AssetCount;
use LuzernTourismus\Celum\Data\AssetCollection\AssetCollectionReader;
use LuzernTourismus\Celum\Data\AssetCollectionPath\AssetCollectionPathReader;
use LuzernTourismus\Celum\Data\AssetCollectionPathSegment\AssetCollectionPathSegmentReader;
use LuzernTourismus\Celum\Reader\Asset\AssetDataReader;
use Nemundo\Admin\Com\Form\AdminSearchForm;
use Nemundo\Admin\Com\Layout\AdminFlexboxLayout;
use Nemundo\Admin\Com\ListBox\AdminSearchTextBox;
use Nemundo\Admin\Com\Table\AdminTable;
use Nemundo\Admin\Com\Table\AdminTableHeader;
use Nemundo\Admin\Com\Table\Row\AdminTableRow;
use Nemundo\Com\Html\Listing\UnorderedList;
use Nemundo\Com\Template\AbstractTemplateDocument;
use Nemundo\Core\Directory\TextDirectory;
use Nemundo\Core\Text\BoldText;
use Nemundo\Html\Paragraph\Paragraph;

class AssetPage extends AbstractTemplateDocument
{
    public function getContent()
    {

        $layout = new AdminFlexboxLayout($this);
        new CelumTab($layout);

        $search = new AdminSearchForm($layout);

        $name = new AdminSearchTextBox($search);
        $name->label = 'Name';
        $name->searchMode = true;

        $fileExtension = new FileExtensionListBox($search);
        $fileExtension->searchMode = true;
        $fileExtension->submitOnChange = true;

        $bold = new BoldText();
        $bold->addKeyword($name->getValue());

        $p = new Paragraph($layout);

        $table = new AdminTable($layout);

        $assetReader = new AssetDataReader();
        $assetReader
            ->filterByFileExtensionId($fileExtension->getValue())
            ->filterByName($name->getValue());

        $assetReader->limit = 100;

        $p->content = (new AssetCount())->getFormatCount() . ' assets found';

        (new AdminTableHeader($table))
            ->addText($assetReader->model->id->label)
            ->addText($assetReader->model->name->label)
            ->addText($assetReader->model->description->label)
            ->addText($assetReader->model->fileExtension->label)
            ->addText('Collection')
            ->addText('Path')
            ->addEmpty();

        foreach ($assetReader->getData() as $assetRow) {

            $row = new AdminTableRow($table);

            $row
                ->addText($assetRow->id)
                ->addText($bold->getBoldText($assetRow->name))
                ->addText($assetRow->description)
                ->addText($assetRow->fileExtension->fileExtension);

            $ul = new UnorderedList($row);

            $assetCollectionReader = new AssetCollectionReader();
            $assetCollectionReader->model->loadCollection();
            $assetCollectionReader->model->collection->loadCollectionType();
            $assetCollectionReader->filter->andEqual($assetCollectionReader->model->assetId, $assetRow->id);
            foreach ($assetCollectionReader->getData() as $assetCollectionRow) {
                //$ul->addText($assetCollectionRow->collectionId . ' ' . $assetCollectionRow->collection->collection);
                $ul->addText($assetCollectionRow->collection->collectionType->collectionType . ': ' . $assetCollectionRow->collection->collection);
            }


            $ul = new UnorderedList($row);

            $pathReader = new AssetCollectionPathReader();
            $pathReader->model->loadCollectionType();
            $pathReader->filter->andEqual($pathReader->model->assetId, $assetRow->id);
            foreach ($pathReader->getData() as $pathRow) {

                $text = $pathRow->collectionType->collectionType . ': ';

                $textList = new TextDirectory();

                $segmentReader = new AssetCollectionPathSegmentReader();
                $segmentReader->model->loadCollection();
                $segmentReader->filter->andEqual($segmentReader->model->assetCollectionPathId, $pathRow->id);
                $segmentReader->addOrder($segmentReader->model->itemOrder);
                foreach ($segmentReader->getData() as $segmentRow) {
                    $textList->addValue($segmentRow->collection->collection);
                    //$text .= $segmentRow->collection->collection . ' --> ';
                }

                $ul->addText($text . $textList->getTextWithSeperator(' -> '));

            }

            $row->addHyperlink($assetRow->previewUrl, 'Preview', true);

        }


        return parent::getContent();
    }
}