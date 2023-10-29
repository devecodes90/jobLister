<?php
include_once 'config/__init.php';
$job = new Job();
$template = new Template('templates/frontpage.php');

$template->title = 'Latest Job';
$template->jobs = $job->getAllJobs();
$template->categories = $job->getCategories();

echo $template;
?>