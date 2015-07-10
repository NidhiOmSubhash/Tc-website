<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ask Question</title>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="<?php echo base_url();?>/css/questyle.css">
</head>

<body>
<div id="wrapper">
<div id="cssmenu">
<ul>
 <li class="borderinc"><a href="#"><?php echo $this->session->userdata('uname')?></a></li>
<li class="dropdown">
<a href="#">
<img src="<?php echo base_url();?>/images/default-user-icon-profile.png" width="42" height="40">
</a>
<ul>
                 <li><a href='#'>Profile</a></li>
                 <li><a href='#'>Ask a question</a></li>
                  <?php echo "<li>". anchor("user/logout","Log out")."</li>";?>
              </ul>
              </li>
             
              
                </ul>
    </div>
    <div id="content">

   <div class="container">
  <h2>Ask a Question</h2>
  <form class="form-horizontal" role="form" method ="post">
    <?php echo form_open('user/question');?>
    <span><?php echo validation_errors();?></span>
    <div class="form-group">
      <label class="control-label col-sm-2" for="title" >Title:</label>
      <div class="col-sm-10">
        <input type="title" class="form-control" id="sub" placeholder="What's your question? Be specific." name = "sub" value = "<?php echo set_value('sub');?>"/>
      </div>
    </div>

    
        <div class="form-group">
      <label class="control-label col-sm-2" for="question">Describe in detail:</label>
      <div class="col-sm-10">   
      <textarea class="form-control" rows="5" id="cont" name = "cont" value = "<?php echo set_value('cont');?>"></textarea>
      </div>
    </div>
    
    
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox" name = "anon" value ="1" <?php echo set_checkbox('anon', '1'); ?>/> Post as anonymous</label>
        </div>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" name ="topic_post" value = "topic_post">Post Question</button>
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
    </div>
</body>
</html>
