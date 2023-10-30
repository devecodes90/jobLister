<div class="container">
    <?php include_once("inc/header.php"); ?>
    <h2 class="page-header">Create Listing Job</h2>
    <form action="" method="post">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="company">Company</label>
                <input type="text" class="form-control" id="company" name="company" placeholder="Company">
            </div>
            <div class="form-group col-md-6">
                <label for="category">Category</label>
                <select name="category" id="category" class="form-control">
                    <option selected>Choose Category...</option>
                    <?php foreach ($categories as $category): ?>
                    <option value="<?php echo $category->id ?>">
                        <?php echo $category->name ?>
                    </option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="title">Job Title</label>
                <input type="text" class="form-control" id="title" name="jobTitle" placeholder="Job Title">
            </div>
            <div class="form-group col-md-12">
                <label for="inputAddress2">Description</label>
                <textarea class="form-control" name="description" id="description"></textarea>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-7">
                <label for="inputCity">Location</label>
                <input type="text" name="location" class="form-control" id="location">
            </div>
            <div class="form-group col-md-5">
                <label for="salary">Salary</label>
                <input type="text" name="salary" class="form-control" id="salary">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-5">
                <label for="inputCity">Contact User</label>
                <input type="text" class="form-control" name="contactUser" id="contactUser">
            </div>
            <div class="form-group col-md-7">
                <label for="contactEmail">Contact Email</label>
                <input type="text" name="contactEmail" class="form-control" id="contactEmail">
            </div>
        </div>
        <input type="submit" class="btn btn-success" name="btn__create" value="Submit">
    </form>
    <?php include_once("inc/footer.php");?>
</div>