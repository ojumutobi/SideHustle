<?php include 'includes/session.php'; ?>
<?php
  if(isset($_SESSION['user'])){
    header('location: cart_view.php');
  }

 
  

?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition register-page">
<div class="register-box">
  	<?php
      if(isset($_SESSION['error'])){
        echo "
          <div class='callout callout-danger text-center'>
            <p>".$_SESSION['error']."</p> 
          </div>
        ";
        unset($_SESSION['error']);
      }

      if(isset($_SESSION['success'])){
        echo "
          <div class='callout callout-success text-center'>
            <p>".$_SESSION['success']."</p> 
          </div>
        ";
        unset($_SESSION['success']);
      }
    ?>
  	<div class="register-box-body">
    	<p class="login-box-msg">MarktPlace Sign Up Completed</p>

    	
      <br>
      <a href="login.php" class="pull-left">Click to Login </a><br>
      <a href="index.php"><i class="fa fa-home fa-3x"></i> Go to MarktPlace</a>
  	</div>
</div>
	
<?php include 'includes/scripts.php' ?>
</body>
</html>