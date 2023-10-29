<?php
include_once 'config/__init.php';
$job = new Job();
$template = new Template('templates/job-single.php');

$job__id = isset($_GET['id']) ? $_GET['id'] : null;


$template->job = $job->getJob( $job__id );

echo $template;
?>