<?php include 'components/authentication.php' ?>
<?php include 'controllers/base/head.php' ?>
<?php include 'controllers/navigation/first-navigation.php' ?>
<?php
?>
<?php
    include '_database/database.php';

    $current_user = $_SESSION['user_username'];
    $sql = "SELECT * FROM manuscripts WHERE WriterID == '$current_user'";
    $result = mysqli_query($database,$sql) or die(mysqli_error($database));

echo "<table>
<tr>
<th>No.</th>
<th>Manuscript Title</th>
<th>Category</th>
</tr>;
$count=0;
while($row = mysqli_fetch_array($result))
{

echo </table>
}";

?>
