<?php
namespace Celum;
use Nemundo\Project\AbstractProject;
use Nemundo\Core\Path\Path;
class CelumProject extends AbstractProject {
public function loadProject() {
$this->project = 'Celum';
$this->projectName = 'celum';
$this->path = __DIR__;
$this->namespace = __NAMESPACE__;
$this->modelPath = (new Path())
->addPath(__DIR__)
->addParentPath()
->addPath('model')
->getPath();
}
}