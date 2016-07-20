<?php 

// Error reporting.
error_reporting(E_ALL); ini_set('display_errors', 1);

/***********************************************************************************
  
Increase the Plays
  
************************************************************************************/

// Set the data folder.
$plays_file = '../../assets/helpers/plays.txt';

// Loves count.
$plays_count = file_get_contents($plays_file);

// Increment the love.
file_put_contents($plays_file, ++$plays_count);

?>