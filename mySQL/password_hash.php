<?php
define("TITLE", "Password Hashing");
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

        <?php

          $password = password_hash( "1234", PASSWORD_DEFAULT );

          $hashedPassword =
            '$2y$10$DP/oS1FTR/jYgcfUAKVWqeppzF1UAO3bzg9wH1MQyAoKU3UyJVbv.';



          if( isset( $_POST['login'] ) ) {
            if ( password_verify( $_POST['password'], $hashedPassword ) ) {
              echo "Password is correct";
            } else {
              echo "Incorrect Password";
            }
          }
         ?>
         <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
             <label>Password</label>
             <input type="text" placeholder="Password" name="password"><br><br>
             <input type="submit" name="login" value="Login">
         </form>
        <!--
        <p class="text-danger">*Required Field</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
            <small class="text-danger">* <?php echo $nameError; ?></small>
            <input type="text" placeholder="Username" name="username"><br><br>
            <small class="text-danger">* <?php echo $emailError; ?></small>
            <input type="text" placeholder="Email" name="email"><br><br>
            <small class="text-danger">* <?php echo $passwordError; ?></small>
            <input type="password" placeholder="Password" name="password"><br><br>
            <input type="textarea" placeholder="Enter Bio here" name="bio"><br><br>
            <input type="submit" name="add" value="Add Entry">
        </form> -->
     </div>
    </body>
</html>
