<?php

// Error reporting.
error_reporting(E_ALL); ini_set('display_errors', 1);

/***********************************************************************************
  
Get Loves and Plays
  
************************************************************************************/

// Set the data folder.
$data_folder = './assets/helpers/';

// Loves count.
$loves_file = file($data_folder . 'loves.txt');
$loves_count = number_format($loves_file[0]);

// Plays count.
$plays_file = file($data_folder . 'plays.txt');
$plays_count = number_format($plays_file[0]);