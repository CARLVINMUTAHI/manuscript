<?php include 'components/authentication.php' ?>
<?php include 'controllers/base/head.php' ?>
<?php include 'controllers/navigation/first-navigation.php' ?>
<?php
?>
    <script>
        $.growl("<?php echo $dialogue; ?> ", {
            animate: {
                enter: 'animated zoomInDown',
                exit: 'animated zoomOutUp'
            }
        });
    </script>
<div class="container">
    <div class="row clearfix">
        <div class="col-md-12">
            <h1 class="text-center">Welcome to your profile</h1>
        </div>
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <ul class="nav text-center">
                <li><a href="edit-profile.php">Edit your profile</a></li>
                <li><a href="all-users.php">View all users</a></li>
                <li><a href="manuscripts.php">My Manuscripts</a></li>
                <li><a href="components/logout.php">Logout</a></li>
                <li></li>
            </ul>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>
