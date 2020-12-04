<?php 
  $my_array = [
    'name_one' => 'Suraj Bera',
    'name_two' => 'Ayush Devpura',
    'name_three' => 'Soumen Bera'
  ];
  unset($my_array['name_three']);
  print_r($my_array);
?>