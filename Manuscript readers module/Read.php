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

 .category
 {
 background-color:#2E2928;
 width:100%;
 height:85%;
 color:#989796;
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
.right{
float:right;
width:45%;
}
left{
float:left;
width:60%;
}
</style>
</head>
<body>
<div id="navbar">
  <a href="#">Hi, Reader</a>
</div>
<br>
<br>
<br>
<br>
<br>
<div class="right">
<img alt="book" style="width:150px;  height:210px; padding-left:10px;padding-top:10px" src="<?php echo base_url()?>/assets/Cover_Images\book10.jpg">
  <?php if(count($records)): ?>
      <?php foreach($records as $record){ ?>
<p><b>Author:<p style="color:grey;"></b><?php echo $record->Author; ?></p>
<p><b>Category:<p style="color:grey;"> </b><?php echo $record->Book_Category; ?></p>
<p><b>Year:<p style="color:grey;"> </b> <?php echo $record->Year; ?></p>
<p><b>Synopsis:<p style="color:grey;"> </b><?php echo $record->Synopsis; ?></p>
</div>
<div class="left">
<iframe style="width:54%; height:700px; float:left;" name="myiframe" id="myiframe" src="<?php echo base_url()?>/assets/Books/TheEnglishSpy.pdf">
</body>
</div>
      <?php } ?>
      <?php else: ?>
<tr>No Records Found</tr>

<?php endif; ?>
    
    
</html>