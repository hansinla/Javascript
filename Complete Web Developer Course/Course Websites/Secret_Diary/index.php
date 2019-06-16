<?php
	include("login.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cloud Diary</title>

    <!-- Bootstrap -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">
  	#name{
  		color: #EAEAEA;
  	}
    
      
      .contentdiv{
        height: 200px;
      }

      .navbar-brand{
      	font-size: 1.4em;
      }

      #topContainer{
      	background-image: url("images/meadow.jpg");
      	width:100%;
      	background-size: cover;
      }

      #topRow{
      	margin-top: 100px;
      	text-align: center;
      }

      #topRow h1{
      	font-size:300%;
      }
      .marginTop {

        margin-top: 10px;        
      }

      .marginBottom  {

        margin-top: 10px;        
      }

      

      .center {
    	text-align: center;
    	}

    </style>

   
  </head>
  <body data-spy="scroll" data-target=".navbar-inverse">
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">

        <!-- NAVBAR HEADER -->
        <div class="navbar-header">

          <!-- BRAND LOGO -->
          <a href="#" class="navbar-brand">Cloud Diary</a> <!-- END BRAND LOGO -->

          <!-- COLLAPSE ICON AT RIGHT -->
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button> <!-- END COLLAPSE ITEM -->

        </div> <!-- END NAVBAR HEADER -->

        <!-- NAVBAR MENU -->
        <div class="collapse navbar-collapse">

          <form class="navbar-form navbar-right" method="POST">
	          <div class="form-group">
	          	<input type="email" name="loginemail" id="loginemail" placeholder="Email" class="form-control" value="<?php echo addslashes($_POST['loginemail']); ?>">
	          </div>
	          <div class="form-group">
	          	<input type="password" name="loginpassword" id="loginpassword" placeholder="Password" class="form-control" value="<?php echo addslashes($_POST['loginpassword']); ?>">
	          </div>
	          <input type="submit" name="submit" class="btn btn-success" value="Log In">Log In</input>
          </form>
        </div> <!-- END NAVBAR MENU -->

      </div>
    </div>

    <div class="container" id="topContainer">

    	<div class="row">
    		<div class="col-md-6 col-md-offset-3" id="topRow">
    			<h1 id="name">Cloud Diary</h1>
    			<p class="lead">Your own private diary, with you wherever you go.</p>

          <?php
          if($error) {
            // prompt errors
            echo '<div class="alert alert-danger">'.addslashes($error).'</div>';
          }
          if($message) {
            // prompt errors
            echo '<div class="alert alert-success">'.addslashes($message).'</div>';
          }

          ?>
    			<p class="bold marginTop">Interested? Sign Up Below!</p>
    		</div>

    		<form method="POST">
    			<!-- email -->
    			<div class="input-group col-md-4 col-md-offset-4 marginTop">
	                <span class="input-group-addon" id="basic-addon1">@&nbsp;</span>
	                <input type="email" name="email" id="email" placeholder="your email" class="form-control" aria-describedby="basic-addon2" value="<?php echo addslashes($_POST['email']); ?>"/>
                </div>

                <!-- password -->
                <div class="input-group col-md-4 col-md-offset-4 marginTop">
                	<span class="input-group-addon" id="basic-addon1">&nbsp;?&nbsp; </span>
                	<input type="password" name="password" id="password" placeholder="your password"  class="form-control" aria-describedby="basic-addon2" value="<?php echo addslashes($_POST['password']); ?>"/>
				        </div>

              	<div class="center">
              		<input type="submit" name="submit" class="btn btn-success marginTop" value="Sign Up"/>
              	</div>
            </form>
    	</div>
    </div>

    </div> <!-- END CONTAINER -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

    <script type="text/javascript">
    	$("#topContainer").css("height", $(window).height());
    </script>
  </body>
</html>
