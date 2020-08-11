<?php
  if (isset($_GET['lang']) && !empty(trim($_GET['lang']))) {
    $_SESSION['lang'] = $_GET['lang'];
    header("Location: ./");
  }
?>