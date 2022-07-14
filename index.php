<?php

require_once('controllers/template.controller.php');
require_once('controllers/curl.controller.php');

$templateController = new TemplateController();
$templateController->index();


?>