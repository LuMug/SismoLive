<?php
session_start();
$soglia_max = filter_input(INPUT_POST, 'soglia_max', FILTER_DEFAULT);
$soglia_min = filter_input(INPUT_POST, 'soglia_min', FILTER_DEFAULT);
if (isset($_SESSION['username'])) {
   session_destroy();
   echo "<script>location.href='../index.php'</script>";
}else{
   echo "<script>location.href='../html/login.html'</script>";
 }
 ?>
