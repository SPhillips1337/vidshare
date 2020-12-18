<?php include('includes/header.php'); ?>
    <h1 class="cover-heading">Upload a video</h1>
    
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <!-- <p class="lead"><input type="file" name="file" accept="video/*" capture></p> -->
        <p class="lead"><input type="file" name="file"></p>
        <p class="lead">
          <input type="submit" value="Upload" class="btn btn-lg btn-secondary" />
        </p>
    </form>
<?php include('includes/footer.php'); ?>