<?php
$emp_id = $_GET['emp_id'];
require_once "config.php";
$sql = "DELETE FROM emp_info WHERE emp_id = $emp_id";
mysqli_query($conn, $sql);
header('Location: allemployeea.php');
exit();
?>