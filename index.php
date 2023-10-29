<?php
include_once 'config/__init.php';
$job = new Job();
$template = new Template('templates/frontpage.php');

$category = isset($_GET['category']) ? $_GET['category'] : null;

if ($category) {
    $template->jobs = $job->getByCategory($category);
    $template->title = 'Job In' . $job->getCategory($category)->name;
}else{
    $template->title = 'Latest Job';
    $template->jobs = $job->getAllJobs();
}

$template->categories = $job->getCategories();

echo $template;
?>