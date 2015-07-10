<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="<?php echo base_url();?>/css/style.css">
</head>

<body>
<div id="wrapper">
<div id="content">

<div class="container">
  <h2>Login</h2>
  <form class="form-horizontal" role="form" method = "post">
    <?php echo form_open('user/login');?>
    <span><?php echo validation_errors();?></span>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" value ="<?php echo set_value('email');?>"/>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Enter password" value="<?php echo set_value('pwd');?>"/>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox" name="remember_me"> Remember me</label><span>Not a member? <a href="<?php echo base_url();?>/index.php/user/register"/>Register now.</a></span>
        </div>
      </div>
    </div>
     <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="button" name="login_sub" value="login_sub">Submit</button>
      </div>
    </div>
    <?php echo form_close();?>
  </form>
</div>
 <div id="footer">
<p><center>&copy; 2015 MEC Association of Computer Students(MACS)|Hits:765765</center></p><br />
<img src="<?php echo base_url();?>/images/line.png" id="line" />
<ul id="social">
<li><a href="#">
 <img src="<?php echo base_url();?>/images/1620929_482113751910964_244183021_n.png" height="30" width="30" /></a></li>
 <li><a href="facebook.com/macs.mec" target="_blank"><img src="<?php echo base_url();?>/images/square-facebook-512.png" height="30" width="30" /></a></li>
<li> <a href="mailto:macs@gmail.com"><img src="<?php echo base_url();?>/images/gmail.png" height="30" width="30" /></a></li>
  </div>
</div>
</body>
</html>
