<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>MANUSCRIPT RANKING</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 <style>
 #navbar {
    background-color: white; /* Black background color */
    position: fixed; /* Make it stick/fixed */
    top: 0; /* Stay on top */
    width: 100%; /* Full width */
    transition: top 0.3s; /* Transition effect when sliding down (and up) */
border-bottom: 2px solid rgba(230,115,0,0.6);
	}


/* Style the navbar links */
#navbar a {
    float: right;
    display: block;
    color: black;
	font-size:20px;
    text-align: center;
    padding: 15px;
    text-decoration: none;
	padding-right:350px;
}

#navbar a:hover {
    background-color: #ddd;
    color: black;
} 
 .left{
 height:100%;
 float:left;
 width:23%;
 background-color:red;
 position:fixed;
 }
 .category
 {
 background-color:#2E2928;
 width:100%;
 height:85%;
 color:#989796;
 }
 .right{
 float:right;
 background-color:white;
 width:77%;
 height:100opx;
 }
 body{
	margin: 0;
	padding: 0;
	background-color:white;
	color: black;
	font-family: Arial;
	font-size: 15px;
	overflow-x:hidden;
	background-attachment:cover;

}
.nav{
background-color:#E93E00;
 width:100%;
  margin-top:-20px;
  padding-top:30px;
 height:15%;

 text-align:center;
}
.nav input[type=text]{
	width: 85%;
	height: 18px;
	background-color:white;
	border: 1px solid rgba(230,115,0,0.6);
	border-radius: 15px;
	color: black;
	font-family: 'Exo', sans-serif;
	font-size: 14px;
	font-weight: 400;
	padding: 4px;
	padding-left:30px;

}

</style>
</head>
<body>  
<div class="left">
<div class="nav">
<p style="color:white;">MANUSCRIPT RANKING</p>
<form action="<?php echo base_url()?>/index.php/Book/SearchResults" method="POST">
<input type="text" onkeypress="<?php echo base_url()?>/index.php/Book/SearchResults" name="search" placeholder="Search Books and Authors">
</form>
</div>
<div class="category">
<br>
<form action="<?php echo base_url()?>/index.php/Book/Category" method="POST">
<p style="color:white;">Categories</p>

<input type="radio" onclick="submit()" name="category" value="All">All<br>
<input type="radio" onclick="submit()" name="category" value="Science_Fiction">Science fiction<br>
<input type="radio" onclick="submit()" name="category" value="Romance">Romance<br>
<input type="radio" onclick="submit()" name="category" value="Drama">Drama<br>
<input type="radio" onclick="submit()" name="category" value="Mystery">Mystery<br>
<input type="radio" onclick="submit()" name="category" value="Thriller">Thriller<br>
<input type="radio" onclick="submit()" name="category" value="Horror">Horror<br>
<input type="radio" onclick="submit()" name="category" value="Comedy">Comedy<br>
<input type="radio" onclick="submit()" name="category" value="Biography">Biographies<br>
<input type="radio" onclick="submit()" name="category" value="Autobiography">Autobiographies<br>
<input type="radio" onclick="submit()" name="category" value="Journal">Journals<br>
<br>
</form>
</div>
</div>
<div class="right">
<div id="navbar">
  <a href="">Hi, Readmodule</a>
  <a href="<?php echo base_url()?>/Welcome/writers">Writer</a>
  <a href="<?php echo base_url()?>/Welcome/index">Publisher</a>
  
</div>
<br>
<br>
<br>
<br>
<div>
  <?php if(count($records)): ?>
      <?php foreach($records as $record){ ?>

<a href="<?php echo base_url()?>/Book/index?id=<?php echo $record->Book_ID; ?>"><img alt="book" style="width:150px;  height:210px; padding-left:10px;padding-top:10px" src="<?php echo base_url()?>/assets/Cover_Images/<?php echo $record->Image; ?>"></a>
	  <?php } ?>
      <?php else: ?>
<tr><h1 style="color:orange; text-align:center; ">0 Results...</h1></tr>

<?php endif; ?>

</div>
</div>
</body>
</html>