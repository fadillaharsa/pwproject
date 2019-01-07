<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Solecodes | <?php echo $title;?></title>
<link type="image/x-icon" rel="shortcut icon" href="" />

<script type="text/javascript" src="<?php echo base_url();?>assets/jquery.min.js"></script>

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/signin.css">
</head>
<body>

<div class="container">
<p><b>sole</b>codes</p>

<form class="form-signin" action="<?php echo $login_action;?>" method="post" enctype="multipart/form-data">

<h2 class="form-signin-heading">Please sign in
</h2>

<label for="inputEmail" class="sr-only">Email address</label>
<input type="text" id="inputEmail" name="inputEmail" class="form-control" placeholder="Email address" <?php if($this->session->userdata('login_valid')) { echo 'value="'.$this->session->userdata('login_valid').'"';}?> required autofocus>
<label for="inputPassword" class="sr-only">Password</label>
<input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Password" required>
<div class="checkbox">
<label>
<input type="checkbox" value="remember-me"> Remember me
</label>

</div>

<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>

<?php if($this->session->userdata('login_message')){ ?>
<div role="alert">
<br><?php echo $this->session->userdata('login_message').echo('<br>'); ?>
</div>
<?php }?>

</form>

</div> <!-- /container -->


<script>
var fh=450,wh=window.innerHeight;
$("form").css('margin-top', (wh-fh)/2);
</script>
</body>
</html>