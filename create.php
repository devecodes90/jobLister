<?php
include_once 'config/__init.php';
$job = new Job();
$template = new Template('templates/job-create.php');

if (isset($_POST['btn__create'])) {
    // Create data array
    $data = array();
    $data['jobTitle'] = $_POST['jobTitle'];
    $data['company'] = $_POST['company'];
    $data['category_id'] = $_POST['category'];
    $data['description'] = $_POST['description'];
    $data['location'] = $_POST['location'];
    $data['salary'] = $_POST['salary'];
    $data['contactUser'] = $_POST['contactUser'];
    $data['contactEmail'] = $_POST['contactEmail'];
    
    if ($job->create($data)) {
        redirect('index.php', 'Job has been listed successfully', 'success');
    }else{
        redirect('index.php', 'Something went wrong', 'error');
    }
}

$template->categories = $job->getCategories();

echo $template;
?>