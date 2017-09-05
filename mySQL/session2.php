<?php
  define("TITLE", "Sessions in PHP page 2");
  session_start();

  echo "Your username is ".$_SESSION['username'].".<br>";
  echo "Your email is ".$_SESSION['email']."<br>";
  print_r($_SESSION);


?>



<html>

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php echo TITLE; ?></title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
      <div class="container">
        <h1><?php echo TITLE ?></h1>

        <p><a href="logout.php">Logout of session</a></p>

     </div>
    </body>
</html>