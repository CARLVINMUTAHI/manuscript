<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style1.css" />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
  <header>

  </header>
  <div class="Sidebar">
    <ul>
      <li>
        <a href="index.html">View Profile</a>
      </li>
      <li>
  <a href="#" class="active">Upload Work</a>
      </li>
<li>
  <a href="#">My Manucripts</a>
</li>
<li id="last">
  <a href="#">Log Out</a>
</li>
    </ul>
  </div>

  <div class="manusub">
  
<!--  <form action="" method="post" id="upload_form">-->
<?php echo $error;?>
  
  <?php echo form_open_multipart('upload/do_upload'); ?>
   
    <div style="padding-bottom: 18px;">Title<br/>
<input type="text" id="title" name="title" value="title" style="width : 400px;"/>
</div>
<div style="padding-bottom: 18px;">Category<span style="color: red;"> *</span><br/>
<select class="s" id="category" name="category" style="width : 250px;" class="form-control">
 
<option value="sci-fi">Sci-Fi</option>
<option value="biography">Biography</option>
<option value="romance">Romance</option>
<option value="self-development">Self-Development</option>
<option value="coursebook">CourseBooks</option>
<option value="action">Action</option>
<option value="history">History</option>

</select></div>
<div style="padding-bottom: 18px;">Synopsis<br/>
<textarea id="synopsis" name="synopsis" style="width : 400px;" rows="6" class="form-control"></textarea>
</div><br /><br />
  <div class="upload">

   <input type = "file" name="userfile" /><br /><br />
   <input type = "submit" name="upload" id="upload" value="upload"/>

  </div>
      <?php echo "</form>" ?>
    </div>
</body>
</html>