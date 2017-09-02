<?php
    define( "TITLE", "Loops" );
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

            <?php
            //while loop
              $startNum = 50;

              while ( $startNum <= 100 ) {
                echo "$startNum &nbsp;";
                $startNum ++;
              }
            //for loop
              for ($forStart = 1; $forStart < 100; $forStart++) {
                echo "$forStart<br>";
              }
            //foreach loop
              $numbers = array (4, 7 , 12 ,45, 13 ,19);
              foreach ($numbers as $numValue) {
                echo "array number value is $numValue<br>";
              }
            //do while loop
              $foo = 10;
              do {
                echo "Number is $foo <br>";
                $foo++;
              } while ( $foo <=50 );
            ?>

        </div>

        <!-- jQuery -->
        <script src="//code.jquery.com/jquery-2.1.4.min.js"></script>

        <!-- Bootstrap JS -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </body>
</html>
