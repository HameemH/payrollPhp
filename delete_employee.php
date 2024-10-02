<?php
$emp_id = $_GET['emp_id'];
// SQL to delete employee with emp_id
require_once "config.php";
$sql = "DELETE FROM emp_info WHERE emp_id = $emp_id";
mysqli_query($conn, $sql);
// Redirect or show a success message after deletion
header('Location: allemployeea.php');
exit();
?>