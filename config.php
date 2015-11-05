<?php
session_start();
error_reporting(E_ALL);
// $_SESSION['logged'] = 1;
/**
 * Settings
 * Application related settings
 */

$mySQLHost = '127.0.0.1';
$mySQLDatabase = 'praba';
$mySQLUsername = 'root';
$mySQLPassword = '';
$myAppPath = 'work/praba';
$myAppFolder = 'praba';

/**
 * Loading functions
 */
require 'resources/function.db.php';

// var_dump(runSQL("SELECT * FROM `tbl_user`",NULL));