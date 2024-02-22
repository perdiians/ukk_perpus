<?php
session_start();
session_destroy();
header("location: login.php");
include('koneksi.php');
    ?>
?>