<?php

  //basics =======================================
  $test='I\'m a variable!';
  $test2='Me too!';
  $number=134;
  $name='Jonathan';
  $a='number';

  echo 'My name is ' .$name;
  echo '<br /><br />';

  //arrays =======================================

  //1st array --------------------------------
  $myArray=array('Syria','Afghanistan','Libya');

  print_r($myArray);
  echo '<br />';
  echo $myArray[1];
  echo '<br /><br />';

  //2nd array --------------------------------
  $secondArray[key1]='United States';
  $secondArray[key4]='India';

  print_r($secondArray);
  echo '<br />';
  echo $secondArray[key4];
  echo '<br />';

  //adding to an existing array with empty key
  $secondArray[]='France';
  print_r($secondArray);
  echo '<br /><br />';

  //3rd array --------------------------------
  $thirdArray=array(
    'France' => 'French',
    'USA' => 'English',
    'Germany' => 'German'
  );
  print_r($thirdArray);
  echo '<br />';
  echo $thirdArray[Germany];
  echo '<br />';

  // removing string Germany from thirdArrat
  unset($thirdArray['Germany']);
  print_r($thirdArray);
  echo '<br />';

  //unset can be used on variables as well as arrays
  unset($name);
  echo $name;

?>
