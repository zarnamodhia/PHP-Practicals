<?php
// Sample data (You can fetch this from the database in real applications)
$employee_name = "John Doe";
$employee_id = "EMP12345";
$basic_salary = 50000;
$hra = 10000;
$medical_allowance = 2000;
$gross_salary = $basic_salary + $hra + $medical_allowance;
$deductions = 5000;
$net_salary = $gross_salary - $deductions;

// Generate HTML content for the salary slip
$html_content = "
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Employee Salary Slip</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .salary-slip {
            width: 70%;
            margin: 0 auto;
            border: 1px solid #000;
            padding: 20px;
        }
        .salary-slip h2 {
            text-align: center;
        }
        .salary-slip table {
            width: 100%;
            margin-top: 20px;
        }
        .salary-slip table th,
        .salary-slip table td {
            padding: 8px;
            text-align: left;
            border: 1px solid #ddd;
        }
    </style>
</head>
<body>
    <div class='salary-slip'>
        <h2>Salary Slip for the Month of April 2025</h2>
        <table>
            <tr>
                <th>Employee Name</th>
                <td>$employee_name</td>
            </tr>
            <tr>
                <th>Employee ID</th>
                <td>$employee_id</td>
            </tr>
            <tr>
                <th>Basic Salary</th>
                <td>$basic_salary</td>
            </tr>
            <tr>
                <th>HRA (House Rent Allowance)</th>
                <td>$hra</td>
            </tr>
            <tr>
                <th>Medical Allowance</th>
                <td>$medical_allowance</td>
            </tr>
            <tr>
                <th>Gross Salary</th>
                <td>$gross_salary</td>
            </tr>
            <tr>
                <th>Deductions</th>
                <td>$deductions</td>
            </tr>
            <tr>
                <th>Net Salary</th>
                <td>$net_salary</td>
            </tr>
        </table>
        <br>
        <p style='text-align: center;'>Thank you for being a valuable part of our team.</p>
    </div>
</body>
</html>
";

// Output HTML content as PDF
header("Content-type: application/pdf");
header("Content-Disposition: inline; filename='salary_slip.pdf'");

echo $html_content;
?>
