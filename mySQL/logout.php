<?php
  //did users browser send cookie?
  if( isset( $_COOKIE[session_name()] ) ) {
    setcookie( session_name(), '', time()-86400, '/' );
  }

  //clear session variables
  session_unset();
  //destroy session
  session_destroy();

  echo "<h1>You've been logged out.</h1>";

  echo "<p><a href='login.php'>Log back in</a></p>";
?>
