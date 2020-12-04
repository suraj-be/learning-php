<?php 
  $authorName = 'Amit Agarwal';

  function setAuthorName() {
    global $authorName;
    $authorName = 'Sumit Agarwal';
  }

  setAuthorName();
  echo $authorName;

  /* 
    There is a caveat when using global keyword in front of the variable. It only works when you are inside the function, if we use the global keyword outside the function, it just makes it global for everything outside of the function, which it already is.
  */