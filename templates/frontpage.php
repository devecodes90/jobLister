<div class="container">
    <?php include_once("inc/header.php"); ?>
    <div class="jumbotron" style="margin-top: 5%;">
      <div class="container">
        <h1 class="display-3"> Find a job </h1>
         <form method="GET" action="index.php">
            <select name="category" class="form-control">
               <option value="">Choose a category</option>
               <?php foreach ($categories as $category) :?>
               <option value="<?php echo $category->id ?>"><?php echo $category->name ?></option>
               <?php endforeach;?>
            </select>
              <br>
            <input type="submit" class="btn btn-lg btn-success btn-block" value="Search">
         </form>
      </div>
    </div>

   <h4><?php echo $title; ?></h4>&nbsp;
  <?php foreach ($jobs as $job) : ?>
  <!-- Example row of columns -->
  <div class="row">
        <div class="col-md-10">
          <h5><?php echo $job->jobTitle; ?></h5>
          <p> <?php echo $job->description; ?> </p>
          <!-- <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p> -->
        </div>
        <div class="col-md-2">
          <p><a class="btn btn-secondary" href="job.php?id=<?php echo $job->id; ?>" role="button">View &raquo;</a></p>
        </div>
  </div>       
  <?php endforeach ?>      


  <hr>

  <?php include_once("inc/footer.php");?>
</div> <!-- /container -->