<!DOCTYPE HTML>
<html>
<head>
  <style>
  .error {color: red;}
  </style>
</head>
<body>

<?php

setcookie("user",$_POST['user'],time()+60*60*24*30);

?>
