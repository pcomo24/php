<?php
  define( "TITLE", "GET &amp; POST");

  if( isset( $_POST["clean_post_submit"] ) ){
    function validateFormData($formData) {
      //sanitize data
      $formData = trim( stripslashes ( htmlspecialchars( $formData ) ) );
      return $formData;
    }

    if( !$_POST["clean_post_name"] ) {
      $nameError = "Please enter your name <br>";
    } else {
      $name = validateFormData( $_POST["clean_post_name"] );
    }

    if( !$_POST["clean_post_email"] ) {
      $emailError = "Please enter your email <br>";
    } else {
      $email = validateFormData( $_POST["clean_post_email"] );
    }
  }
?>

<!DOCTYPE html>

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
            <h1><?php echo TITLE; ?></h1>

            <h4>Submitted via $_GET</h4>
            <form action="form_get.php" method="get">
                <input type="text" placeholder="Name" name="name">
                <input type="text" placeholder="Email" name="email">
                <input type="submit" name="form_submit">
            </form>

            <h4>Submitted via $_POST</h4>
            <form action="form_post.php" method="post">
                <input type="text" placeholder="Name" name="post_name">
                <input type="text" placeholder="Email" name="post_email">
                <input type="submit" name="post_submit">
            </form>

            <h4>Form Validation and sanitization</h4>
            <p class="text-danger">*Required Field</p>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
                <small class="text-danger">* <?php echo $nameError; ?></small>
                <input type="text" placeholder="Name" name="clean_post_name"><br>
                <small class="text-danger">* <?php echo $emailError; ?></small>
                <input type="text" placeholder="Email" name="clean_post_email">
                <input type="submit" name="clean_post_submit">
            </form>

            <?php
              if ( isset($_POST["clean_post_submit"]) ) {
                echo "<h4>Your info</h4>";
                echo "$name <br> $email <br>";
              }
            ?>


        </div>

        <!-- jQuery -->
        <script src="//code.jquery.com/jquery-2.1.4.min.js"></script>

        <!-- Bootstrap JS -->
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </body>
</html>
