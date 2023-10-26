<?php
include_once 'config/__init.php';

$template = new Template('templates/frontpage.php');

$template->title = 'Latest Job';
echo $template;
?>