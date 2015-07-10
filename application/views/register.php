<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sign up now</title>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="<?php echo base_url();?>/css/regstyle.css">
</head>

<body>
<div id="wrapper">


<div class="container">
 <center> <h2>Sign up</h2></center>
 <span><?php echo $error;?><?php echo validation_errors();?></span>
    <?php echo form_open('user/register');?>
    <div class="form-group">
     
      <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name" value = "<?php echo set_value('fname');?>"/>
    </div>
        <div class="form-group">
     
      <input type="text" class="form-control" id="lname" name ="lname" placeholder="Last Name" value = "<?php echo set_value('lname');?>"/>
    </div>
        <div class="form-group">
     
      <input type="text" class="form-control" id="uname" name ="uname" placeholder="Username" value = "<?php echo set_value('uname');?>"/>
    </div>
        <div class="form-group">
     
      <input type="email" class="form-control" id="email" name ="email" placeholder="Email" value = "<?php echo set_value('email');?>"/>
    </div>
        <div class="form-group">
     
      <input type="text" class="form-control" id="batch" name ="batch" placeholder="Batch" value = "<?php echo set_value('batch');?>"/>
    </div>
        <div class="form-group">
     
      <input type="text" class="form-control" id="grad" name ="grad" placeholder="Year of Graduation" value = "<?php echo set_value('grad');?>"/>
    </div>
    <div class="form-group">
      
       <div id="radio">
    <label class="radio-inline">
      <input type="radio" name="gender" value = "Male" <?php echo set_value('gender','Male');?>/>Male
    </label>
    <label class="radio-inline">
      <input type="radio" name="gender" value = "Female"<?php echo set_value('gender','Female');?>/>Female
    </label>
    </div>
      
      <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Password" value = "<?php echo set_value('pwd');?>"/>
    </div>
        <div class="form-group">
      
      <input type="password" class="form-control" id="cpwd" name="cpwd" placeholder="Confirm Password" value = "<?php echo set_value('cpwd');?>"/>
    </div>
    
   
    <div id="sub">
     <button type="submit" class="button" name ="submit" value = "submit">Submit</button>
    </div>

  <?php echo form_close();?>
</div>


 <div id="rfooter">
<p><center>&copy; 2015 MEC Association of Computer Students(MACS)|Hits:765765</center></p><br />
<img src="<?php echo base_url();?>/images/line.png" id="line" />
<ul id="social">
<li><a href="#">
 <img src="<?php echo base_url();?>/images/1620929_482113751910964_244183021_n.png" height="30" width="30" /></a></li>
 <li><a href="facebook.com/macs.mec" target="_blank"><img src="<?php echo base_url();?>/images/square-facebook-512.png" height="30" width="30" /></a></li>
<li> <a href="mailto:macs@gmail.com"><img src="<?php echo base_url();?>/images/gmail.png" height="30" width="30" /></a></li></ul>
  </div>
  </div>
</body>
</html>
