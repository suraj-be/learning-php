  <?php
  $language = 'python';

  /* $language will be printed as is */
  $statement = '$language is a good programming language';
  echo $statement;
  /* \n will be printed as is. The main thing to remember, when using single quotes for string values is that it will print out everything as is. None of the text inside will be evaluated including variables and including any type of escape sequence(s). */
  $example = 'St. Patrick\'s Day\n';
  echo $example;