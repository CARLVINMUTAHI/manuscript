<?php
    session_start();
    include '../_database/database.php';

    if(isset($_REQUEST['upload'])){
        $title=$_REQUEST['title'];
        $Synopsis=$_REQUEST['synopsis'];
        $category=$_REQUEST['category'];
        $author=$_REQUEST['author'];
        $target_dir = "userfiles/".$target_file;
        $target_dir1 = "userfiles/".$target_file1;
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["ImageFile"]);
    $target_file1 = $target_dir1 . basename($_FILES["fileToUpload1"]["PdfFile"]);
  $result=  move_uploaded_file($target_file, $target_dir);
    move_uploaded_file($target_file1,$target_dir1);
        $sql="INSERT INTO manuscripts(	Book_Name,Book_Category,Author,Book,Image) VALUES('$title','$category','$author','$target_file','$target_file1')";
        mysqli_query($database,$sql) or die(mysqli_error($database));
        $_SESSION['user_username'] = $user_username;
        header('Location: ../home.php'.$user_username);
    }
    
?>
