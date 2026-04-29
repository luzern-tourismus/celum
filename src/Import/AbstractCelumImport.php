<?php

namespace LuzernTourismus\Celum\Import;

use LuzernTourismus\Celum\WebRequest\CelumWebRequest;
use Nemundo\Core\Base\AbstractBase;
use Nemundo\Core\Debug\Debug;
use Nemundo\Core\Json\Reader\JsonReader;
use Nemundo\Core\TextFile\Writer\TextFileWriter;
use Nemundo\Core\Time\Stopwatch;
use Nemundo\Project\Path\TmpPath;

abstract class AbstractCelumImport extends AbstractBase
{

    protected $endpoint;

    protected $parameter;

    protected $page = 1;

    private static $count = 0;

    abstract protected function loadImport();

    abstract protected function onItem($item);

    public function import()
    {

        $this->loadImport();

        do {

            $url = 'https://content.luzern.com/content-api/v1/' . $this->endpoint;
            $url .= '?size=200&page=' . $this->page . '&' . $this->parameter;

            /*(new Debug())->write('Page: ' . $this->page);
            (new Debug())->write($url);*/

            $request = new CelumWebRequest();

            $stoppwatch = new Stopwatch('Download Json');
            $response = $request->getUrl($url);
            $stoppwatch->stopAndPrintOutput();

            $filename = (new TmpPath())
                ->addPath('celum_' . $this->endpoint . '_' . AbstractCelumImport::$count . '.json')
                ->getFullFilename();

            AbstractCelumImport::$count++;

            $file = new TextFileWriter($filename);
            $file->overwriteExistingFile = true;
            $file->addLine($response->html);
            $file->writeFile();

            $jsonReader = new JsonReader();
            $jsonReader->fromText($response->html);
            $jsonData = $jsonReader->getData();

            $total = $jsonData['totalElements'];
            $hasNext = false;
            if (isset($jsonData['hasNext'])) {
                $hasNext = $jsonData['hasNext'];
            }

            (new Debug())->write('Total: ' . $total);

            $count = 0;
            foreach ($jsonData['content'] as $item) {
                $this->onItem($item);
                $count++;
            }

            (new Debug())->write('Count: ' . $count);

            $this->page++;

            //(new Delay())->delay(1);

        } while ($hasNext);

    }

}