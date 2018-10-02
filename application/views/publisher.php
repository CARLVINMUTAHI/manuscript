<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">

<title>Publishers</title>


</head>

<body>

<div class="container">

  <div class="header" id="myHeader">
  <a href="#" class = "logo">Manuscript Ranking System</a>
  
  <div class="topnav" id="myTopnav">
   <div class="header-right">
  <a href="#home">Home</a>
  <a href="#news">Authors</a>
  <a href="#news" class="active">Publishers</a>
  <a href="#contact">Readers</a>
  <a href="#about">About</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
  </div>
	</div> 
    <!-- end .header -->
    </div>
    
   
  <div class="content">
   
   <div class="search-area" style="margin-left:200px;">
    
    <div class="custom-select" style="width:200px;">
  <select>
    <option value="0">Select category</option>
    <option value="1">Science Fiction</option>
    <option value="2">Romance</option>
    <option value="3">Drama</option>
    <option value="4">Autobiographies</option>
  </select>
</div>
  
   <form class="example" action="/action_page.php" style="margin-left: 260px; max-width: 300px; margin-top: -40px;">
  
  <input type="text" placeholder="Search..." name="search2" style="width: 200%; border-radius: 10px;">
  <button type="submit" style="margin-left: 620px; margin-top: -42px; height: 42px; border-radius: 10px;"><i class="fa fa-search"></i></button>
  
    </form>
     
      </div>
      
      <div class="manuscript" style="padding:20px; margin-left:100px;">
        <h2>manuscript title</h2>
         
    <a href="#">
    <img src= "<?php echo base_url('images/sample.jpg'); ?>" style="width : 250px; height : 350px;">
     </a>
        
     <div class="synopsis" style="float: right; width:70%;">
        
         <h2>Synopsis</h2>
         <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
         
         <p style="padding-top:70px;">
          <button name="button" id="button" value="">View Manuscript</button>
          <button name="button" id="button" value="">Review Manuscript</button>

      </p>
         
     </div>
     
      </div>
   
    </div><!-- end .content -->
    
    
<!--
  <div class="sidebar2">
   
    <form name="form1" method="post" action="">
    <fieldset style="border:none;">
    <legend><h3>Log in</h3></legend>
      <p>
        <input type="text" name="textfield" placeholder="Username" id="textfield" style="height: 30px; border-radius: 10px;">
      </p>
      <p>
        <input type="password" name="textfield2" placeholder= "Password" id="textfield2" style="height:30px; border-radius: 10px;">
      </p>
      <p>
          <button name="button" id="button" value="Log in">Log in</button>
      </p>
      <p>Don't have an account? <a href="" style="text-decoration:none;">Create one here</a></p>
      </fieldset>
    </form>
    
     end .sidebar2 
    </div>
-->
    
  <div class="footer">
   <footer class="w3-center w3-padding-64">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
</footer>
    
    <!-- end .footer --></div>
    
  <!-- end .container--> </div>
  
<script type='text/javascript' src="<?php echo base_url(); ?>js/script.js"></script>

  

</body>
</html>
