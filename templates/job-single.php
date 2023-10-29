<div class="container">
   <?php include_once("inc/header.php"); ?>
     <h3 class="page-header">
       <?php echo $job->jobTitle; ?>  &nbsp;(<?= $job->location ?>)
     </h3> 
     <small>Posted by <?= $job->contactUser; ?> on <?= $job->post_date; ?></small>
     <hr>
     <p class="lead"><?= $job->description; ?></p>
     <ul class="list-group">
        <li class="list-group-item">
            Company : <?= $job->company; ?>
        </li>
        
        <li class="list-group-item">
            Salary : <?= $job->salary; ?>
        </li>
        <li class="list-group-item">
            Contact Email : <?= $job->contactEmail; ?>
        </li>
     </ul>
     <br><br>
     <a href="index.php">Go Back</a>
    <?php include_once("inc/footer.php");?>
</div>
