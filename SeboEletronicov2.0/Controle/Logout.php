<?php

/*
  File name: Logout.php
  File description: logout of system
 */
session_start();
session_destroy();
header("Location: ../Visao/site.php");
?>