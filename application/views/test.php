<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Publishers</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">

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
    <p>This .footer contains the declaration position:relative; to give Internet Explorer 6 hasLayout for the .footer and cause it to clear correctly. If you're not required to support IE6, you may remove it.</p>
    
    <!-- end .footer --></div>
    
  <!-- end .container--> </div>
  
<script type='text/javascript' src="<?php echo base_url(); ?>js/script.js"></script>

  

</body>
</html>
