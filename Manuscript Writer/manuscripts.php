<?php include 'components/authentication.php' ?>
<?php include 'controllers/base/head.php' ?>
<?php include 'controllers/navigation/first-navigation.php' ?>
<?php
?>

<div class="form-group">
  <form id="contact-form" class="form" action="components/view.php" enctype="multipart/form-data" method="POST" role="form">
    <label class="form-label" for="author">Author Name</label>
    <input type="text" class="form-control input-lg" id="name" name="author" placeholder="Title" tabindex="1" required>

</div>
<div class="text-center">
    <button type="submit" name="upload" class="btn btn-start-order">Upload</button>
</div>



echo "$result";

?>
