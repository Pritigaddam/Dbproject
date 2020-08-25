<?php
session_start();
unset($_SESSION['admin_email']);
session_destroy();
echo "<script>";
echo "alert('Logout Successfully');";
echo "window.location.href='../index.php';";
echo "</script>";
?>