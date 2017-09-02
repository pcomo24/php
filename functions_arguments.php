<?php
    define( "TITLE", "Functions &amp; Arguments" );
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

              function myFunction() {
                $a = 0;

                do {
                  echo "$a &nbsp;";
                  $a++;
                } while ($a <= 10);
              }
              myfunction();

              function myNextFunction($a, $b) {
                do {
                  echo"$a &nbsp;";
                  $a++;
                } while ($a <= $b);
              }
              echo "<br>";
              myNextFunction(4, 16);

              function add($num1, $num2) {
                $sum = $num1 + $num2;
                echo "sum of $num1 and $num2 is $sum";
              }
              echo "<br>";
              add(233, 18);
            ?>

        </div>

        <!-- jQuery -->
        <script src="//code.jquery.com/jquery-2.1.4.min.js"></script>

        <!-- Bootstrap JS -->
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </body>
</html>
