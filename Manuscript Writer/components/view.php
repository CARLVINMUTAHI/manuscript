<?php
    session_start();
    include '../_database/database.php';

    if(isset($_REQUEST['upload'])){
$author = $_SESSION['author'];
$sql = "SELECT Book_Name FROM manuscripts WHERE Author='$author'";
$result = mysqli_query($database,$sql) or die(mysqli_error($database));
    }

?>
