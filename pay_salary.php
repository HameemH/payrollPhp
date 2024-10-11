<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee - Automated Payroll System</title>
    <link rel="stylesheet" href="../css/employeeP_styles.css">
</head>
<body>
    
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
