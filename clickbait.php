<?php
    define( "TITLE", "Change Clickbait" );
    if (isset ($_POST["change_submit"] ) ) {
      $clickBait = strtolower($_POST["clickbait"]);

      $hotWords = array(
                    "you won't believe",
                    "one weird trick",
                    "change your life",
                    "amazing",
                    "10 ways",
                    "this",
                    "unbelievable",
                    "doctors",
                    "scientists"
      );

      $coldWords = array(
                    "you may or may not find impressive",
                    "some bologna",
                    "could provide you wit new info",
                    "above average",
                    "another lame list",
                    "this might",
                    "believeable",
                    "quacks",
                    "experimental minds"
      );
      //str_replace("search for this", "replace with this", "find it in this" )
      $newHeadline = str_replace($hotWords, $coldWords, $clickBait);
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
        <p class="lead">Tired of clickbait? Lets have some fun with them</p>
        <div class="row">
          <form class="col-sm-8 col-offset-2" action="" method="post">
            <textarea placeholder="Paste clickbait here" class="form-control
            input-lg" name="clickbait"></textarea><br>
            <button type="submit" class="btn btn-primary btn-lg pull-right"
            name="change_submit">New headline</button>
          </form>
        </div>

        <?php
        if ( isset ($_POST["change_submit"] ) ){
          echo "<strong class='text-danger'>Original Clickbait</strong>
          <h4>".ucwords($clickBait)."</h4><hr>";
          echo "<strong class='text-danger'>Fun Clickbait</strong>
          <h4>".ucwords($newHeadline)."</h4>";
        }
        ?>


      </div>




        <!-- jQuery -->
        <script src="//code.jquery.com/jquery-2.1.4.min.js"></script>

        <!-- Bootstrap JS -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </body>
</html>
