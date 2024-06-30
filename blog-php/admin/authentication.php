<?php
session_start();
include('config/dbcon.php');

if (!isset($_SESSION['auth'])) {
  $_SESSION['message'] = "Login to access Dashboard";
  header('location: ../login.php');
  exit(0);
} elseif (isset($_SESSION['auth'])) {

  if ($_SESSION['auth_role'] != "1") {
    $_SESSION['message'] = "You Are not authorized as Admin";
    header('location: ../login.php');
    exit(0);
  }
}