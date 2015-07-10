<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TC website</title>
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="<?php echo base_url();?>/css/mainstyle.css">
</head>

<body>
<div id="wrapper">


   <div id="cssmenu">
    <?php if($this->session->userdata('uname')!=''){?>
<ul>
 <li class="borderinc"><a href="#"><?php echo $this->session->userdata('uname')?></a></li>
<li class="dropdown">
<a href="#">
<img src="<?php echo base_url();?>/images/default-user-icon-profile.png" width="42" height="40">
</a>
<ul>
                 <li><a href='#'>Profile</a></li>
                  <?php echo "<li>". anchor("user/question"," Ask a question")."</li>";?>
                  <?php echo "<li>". anchor("user/logout","Log out")."</li>";?>
              </ul>
              </li>
             
              
                </ul>
      <?php }

      else
        {?>
      <ul>
         <?php echo "<li>". anchor("user/login","Log In")."</li>";?>
          <?php echo "<li>". anchor("user/register","Sign Up")."</li>";?>

      </ul>
         <?php }?>

    </div>
    
  
 <div id="content">
    <div id="contact">
    Contact us<br />
 <p> Mobile:+919000000000<br />
  Email:<a href="mailto:macs@gmail.com">macs@gmail.com</a></p>
  </div>
  <div id="maincontent">
  <div id="logo">
  <img src="<?php echo base_url();?>/images/LOGO_FINAL (1).jpeg" height="100" width="100" />
  </div>
  <div id="sub">
<div id="top">
  <h3><p class="topq">Top Questions</p></h3>
  </div>
  <?php foreach ($query as $row) {?>
  <div id="questions"><p>0 <br /><span class="small-text">VIEWS</span><span class="question"><a href="#"><?php echo $row->topic_sub?></a></span></p>
  <div id="lorem">
  <p><?php echo $row->topic_content?><a href="#">See more</a></p>
  </div>
  <span class="ask"><p class="small-text">-Asked by<a href="#"> <?php echo $row->uname?></a></p></span>
  </div>
   
    <?php }?>
  </div>
  </div>
  
  <div class="container">
  <ul class="nav nav-tabs">
    <li class="active" id="space"><a data-toggle="tab" href="#home">MOST ACTIVE</a></li>
    <li id="space"><a data-toggle="tab" href="#menu1">  NEWEST  </a></li>
   <li id="space"><a data-toggle="tab" href="#menu2">ADMINS</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
          <div id="user">
      User1
      <img src="<?php echo base_url();?>/images/medal-13534682.jpg" height="30" width="30" />
      </div>
      <div id="user">
      User2
      <img src="<?php echo base_url();?>/images/silver-medal-13534684.jpg" height="30" width="30" />
      </div>
      <div id="user">
      User3
      <img src="<?php echo base_url();?>/images/bronze-medal-13534679.jpg" height="30" width="30" />
      </div>
    </div>
    <div id="menu1" class="tab-pane fade">
    <div id="user">
      <p>User1</p>
      </div>
      <div id="user">
      <p>User2</p>
      </div>
    </div>
   
       <div id="menu2" class="tab-pane fade">
    <div id="user">
      <p>Admin1</p>
      </div>
      <div id="user">
      <p>Admin2</p>
      </div>
    </div>
   
  </div>
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

  </div>
  </body>
  </html>
