<?php

// *** Logout the current user.
session_destroy();
$logoutGoTo = "index.php";

if (!isset($_SESSION)) {

  session_start();

}

$_SESSION['MM_Username'] = NULL;



unset($_SESSION['MM_Username']);
unset($_SESSION['role']);




echo "<script>window.location.href='../index.php'</script>";

exit;



?>

