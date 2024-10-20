<?php
 require_once "config.php";
 $id=$_GET['emp_id'];
 $sql="UPDATE `user` SET   role='Admin' WHERE emp_id='$id'";
 $conn->query($sql);
 header("Location: allemployeea.php");
 
?>