<?php
namespace LuzernTourismus\Celum\Site;
use Nemundo\Web\Site\AbstractSite;
use LuzernTourismus\Celum\Page\OrtPage;
class OrtSite extends AbstractSite {
protected function loadSite() {
$this->title = 'Ort';
$this->url = 'ort';
}
public function loadContent() {
(new OrtPage())->render();
}
}