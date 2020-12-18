<?php include('includes/header.php'); ?>
    <h1 class="cover-heading">Share your video</h1>
    
        <p class="lead">Please use the link below to share your video</p>
        <p class="lead">
          <a href="<?php echo  $_SERVER['HTTP_REFERER']; ?>uploads/<?php echo $_GET['video'] ?>"><?= $_SERVER['HTTP_REFERER']; ?>uploads/<?php echo $_GET['video'] ?></a>
        </p>
<?php include('includes/footer.php'); ?>