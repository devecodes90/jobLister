<?php
include_once 'config/__init.php';
$job = new Job();
$template = new Template('templates/job-create.php');



$template->categories = $job->getCategories();

echo $template;
?>