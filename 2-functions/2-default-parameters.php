<?php 
  /* Default paramter in php is same as JS */

  function shoutOut($name = 'Suraj') {
    echo $name;
  }

  shoutOut();

  /* But remember, all default parameters need to be at the end of the function declaration. All required parameters need to be at the beginning of the function declaration */
?>