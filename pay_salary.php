<?php
  session_start();  

  if (isset($_SESSION['user'])) {
      $user = $_SESSION['user'];  
  } else {
      header("Location: login.php");
      exit();
  }
  require_once "config.php";
  $eId1=$user['emp_id'];

  $sql3 = "SELECT * FROM `emp_info` WHERE emp_id='$eId1' ";
    $result3 = $conn->query($sql3);
    $row3 = $result3->fetch_assoc() ;

    $eId=$_GET['emp_id'];

    $sql = "SELECT * FROM `emp_info` WHERE emp_id='$eId' ";
    $sql1="SELECT * FROM `salary_info` WHERE emp_id='$eId' ";
    $sql2="SELECT * FROM `loan` where emp_id='$eId'";
      $result = $conn->query($sql);
      $result1 = $conn->query($sql1);
      $result2 = $conn->query($sql2);
  
      $row = $result->fetch_assoc() ;
      $row1 = $result1->fetch_assoc() ;
      $row2 = $result2->fetch_assoc() ;
      
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee - Automated Payroll System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/employeeP_styles.css">
    <link rel="stylesheet" href="./css/navbar_footer_style.css">
</head>
<body>
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
  
    <a class="navbar-brand" href="welcome_admin.php">
    <img src="./logos/logo.jpg" alt="" width="35" height="35"
  class=" align-text-top ">  
    Automated Payroll System</a>
    <div class="d-flex">
      <?php

        echo '<p class="fw-bold fs-5 me-3 mt-2">' . $row3['name'] . '</p>';
      ?>
      
      <a href="logout.php" class="text-decoration-none" onclick="return confirm('Are you sure you want to log out?')"> <button class="btn btn-outline-danger" type="button">Log Out</button></a>
   </div>
  </div>
</nav>
    <main>
        <div class="grid-container">
        <section id="profile">
            <h2>Calculate Salary </h2>
            <form>
                <div class="form-group">
                    <label for="employee-id">Employee ID:</label>
                    <input type="text" id="employee-id" name="employee-id" ><br>
                </div>
                <div class="form-group">
                    <label for="employee-name">Name:</label>
                    <input type="text" id="employee-name" name="employee-name" ><br>
                </div>
                <div class="form-group">
                    <label for="Salary">Salary:</label>
                    <input type="text" id="Salary" name="Salary" ><br>
                </div>
                <div class="form-group">
                    <label for="Emi">Loan Emi:</label>
                    <input type="text" id="Emi" name="Emi" ><br>
                </div>
                <div class="form-group">
                    <label for="Leave">Leave:</label>
                    <input type="text" id="Leave" name="Leave" ><br>
                </div>
                <div class="form-group" style="margin-top: 10px;margin-bottom: 10px;">
                    <label for="bonus">Give Bonus:</label>
                    <select id="bonus" name="bonus" style="padding-left: 10px; padding-right: 10px;">
                        <option value="no">No</option>
                        <option value="yes">Yes</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="Overtime">Overtime Hour:</label>
                    <input type="text" id="Overtime" name="Overtime" ><br>
                </div>
                <button type="submit">Update Profile</button>
            </form>
        </section>
        <section id="salary">
            <h2>Salary Information</h2>
            <form>
                <label for="Id">Employee Id:</label>
                <input type="text" id="Id" name="Id" readonly><br>
                <label for="tSalary">Total Salary:</label>
                <input type="text" id="tSalary" name="tSalary" readonly ><br>
                <label for="Bonus">Bonus:</label>
                <input type="text" id="Bonus" name="Bonus" readonly ><br>
                <label for="deductions">Deductions:</label>
                <input type="text" id="deductions" name="deductions" readonly><br>
                <label for="loan">Loan Paid:</label>
                <input type="text" id="loan" name="loan" readonly><br>
                <label for="Leaves">Leaves:</label>
                <input type="text" id="Leaves" name="Leaves" readonly><br>
                <label for="time">Overtime:</label>
                <input type="text" id="time" name="time" readonly><br>
                <button type="submit">Update Profile</button>
            </form>
        </section>
        </div>
       
    
    </main>
    <script src="./pay_salary.js"></script>
</body>
</html>
