document.querySelector("#profile form").addEventListener("submit", function(event) {
    event.preventDefault(); 

    const employeeId = document.getElementById("employee-id").value;
    const employeeName = document.getElementById("employee-name").value;
    let salary = parseFloat(document.getElementById("Salary").value) || 0;
    let loanEmi = parseFloat(document.getElementById("Emi").value) || 0;
    let leave = parseInt(document.getElementById("Leave").value) || 0;
    const bonusSelected = document.getElementById("bonus").value;
    let overtimeHours = parseFloat(document.getElementById("Overtime").value) || 0;

    
    const leaveDeductions = leave * 100; // Deduct 100 for each leave
    const overtimePay = overtimeHours * 50; // Pay 50 for each overtime hour
    const bonus = bonusSelected === "yes" ? 500 : 0; // Bonus is 500 if 'yes', otherwise 0

    // Calculate total salary
    const totalDeductions = loanEmi + leaveDeductions;
    const netSalary = (salary + overtimePay + bonus) - totalDeductions;

    // Update values in the second form
    document.getElementById("Id").value = employeeId;
    document.getElementById("tSalary").value = netSalary.toFixed(2);
    document.getElementById("Bonus").value = bonus.toFixed(2);
    document.getElementById("deductions").value = totalDeductions.toFixed(2);
    document.getElementById("loan").value = loanEmi.toFixed(2);
    document.getElementById("Leaves").value = leave;
    document.getElementById("time").value =overtimeHours;
});