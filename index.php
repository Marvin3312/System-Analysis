<?php 

/*=======================
Error Reporting
=======================*/

ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', dirname(__FILE__) . '/error_log.txt');

/*=======================
Rrquire Files
=======================*/

require_once 'webs/controllers/template.controller.php';


/*=======================
template object 
=======================*/
$index = new TemplateController();
$index->index();