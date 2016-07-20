<?php 

// Error reporting.
error_reporting(E_ALL); ini_set('display_errors', 1);

/***********************************************************************************
  
Invrease the Loves
  
************************************************************************************/

// Set the data folder.
$loves_file = '../../assets/helpers/loves.txt';

// Loves count.
$loves_count = file_get_contents($loves_file);

// Increment the love.
file_put_contents($loves_file, ++$loves_count);

?>