<?php
   session_start();

   include("connection.php");

   $query = "SELECT diary FROM users WHERE id ='".$_SESSION['id']."' LIMIT 1";
   $result = mysqli_query($link, $query);
   $row = mysqli_fetch_array($result);
   $diary = $row['diary'];
  
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

    #logOutBtn {
      margin-top: 6px;
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
        <div class="navbar-header pull-left">
          <!-- BRAND LOGO -->
          <a href="#" class="navbar-brand">Cloud Diary</a> <!-- END BRAND LOGO -->
        </div>

        <!-- LOG OUT BUTTON AT RIGHT -->
        <div type="button" class="pull-right" id="logOutBtn">
          <ul class="navbar-bar nav">
            <li><a href="index.php?logout=1">Log Out</a></li>
          </ul>
        </div> <!-- END LOG OUT BUTTON  -->

      </div> <!-- END NAVBAR HEADER -->

    </div>
    <!--           MAIN PAGE AREA       -->
    <div class="container" id="topContainer">
    	<div class="row">
    		<div class="col-md-6 col-md-offset-3" id="topRow">
    			<h1 id="name">Cloud Diary</h1>
          <textarea class="form-control"><?php  echo $diary; ?></textarea>
        </div>
      </div>
    </div> <!-- END CONTAINER -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

    <script type="text/javascript">
    	$("#topContainer").css("height", $(window).height()); // min-height ????
      $("textarea").css("height", $(window).height() - 240);

      // POST function to update text in database
      $("textarea").keyup(function() {
        $.post("updatediary.php", { diary: $("textarea").val()} );

      });

    </script>
  </body>
</html>
