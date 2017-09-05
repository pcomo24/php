<?php
  define("TITLE", "Login Page");

 //validate form on submit
 if( isset( $_POST['login'] ) ) {
   function validateFormData( $formData ) {
     $formData = trim( stripslashes( htmlspecialchars( $formData ) ) );
     return $formData;
   }
   $formUN = validateFormData($_POST['username']);
   $formPW = validateFormData($_POST['password']);
 //move this to include whole process

   //connect to SQL db
   include('connection.php');

   $query = "SELECT username, email, password FROM users WHERE username = '$formUN'";
   $result = mysqli_query( $conn, $query );


   //if data exists
   if( mysqli_num_rows($result) > 0) {
     while( $row = mysqli_fetch_assoc($result) ) {
       $user = $row['username'];
       $email = $row['email'];
       $hashedPW = $row['password'];
     }
     if ( password_verify( $formPW, $hashedPW ) ) {
       session_start();
       $_SESSION['loggedUN'] = $user;
       $_SESSION['loggedEmail'] = $email;
       header("Location: profile.php");
     } else {
       $loginError = "<div class='alert alert-danger'>Wrong username/password
       combination</div>";
   }
  } else {
     $loginError = "<div class='alert alert-danger'>No such user in database.
     Try again. <a class='close' data-dismiss='alert'>&times;</a></div>";
   }
}
 mysqli_close($conn);
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
        <h1><?php echo TITLE ?></h1>
        <?php echo $loginError ?>
        <form class='form-inline'
          action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>"
          method="post">
          <div class="form-group">
            <label for='login-username' class="sr-only">Username</label>
            <input type="username" placeholder="Username" name="username"
                class='form-control' id='login-username'>
          </div>
          <div class="form-group">
             <label for='login-password' class="sr-only">Password</label>
             <input type="password" placeholder="Password" name="password"
               class='form-control' id='login-password'>
          </div>
          <input type="submit" name="login" value="Login">
        </form>
     </div>
    </body>
</html>
