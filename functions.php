<?php
  function checkForClickBait() {
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
    return array($clickBait, $newHeadline);
  }

  function displayNewHeadline($x, $y) {
    echo "<strong class='text-danger'>Original Clickbait</strong>".
    //ucwords() function capitalizes first letter of each word-->
    "<h4>".ucwords($x)."</h4><hr>";
    echo "<strong class='text-danger'>Fun Clickbait</strong>
    <h4>".ucwords($y)."</h4>";
  }
?>
