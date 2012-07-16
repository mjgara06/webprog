<?php
error_reporting();
if (empty($_SESSION['is']['username'])) {
require('denied.php');
exit;
}
$user =  $_SESSION['is']['username'];
if (!$user) { 
require('denied.php');
exit;
}
?>
