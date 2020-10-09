<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Salary Registration</title>
    <link rel="stylesheet" href="./CSS/style.css">
    <link rel="stylesheet" href="./CSS/dashboard.css">
    <link rel="stylesheet" href="./CSS/Employee_Registration.css">

</head>

<body>
    <header>
        <h1>SALARY MANAGEMENT SYSTEM</h1>
        <div class="logo">
            <!--img src="./Images/Company Logo.png" alt="Company Logo"> -->
        </div>
    </header>
    <div class="navbar-design">
        <a href="#home">Home</a>
        <a href="AboutUs.html">ABOUT US</a>
        <div class="dropdown">
            <button class="dropbtn" onclick="myFunction()">Administrator
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content" id="myDropdown">
                <a href="AdminRegistration.html">Add New Admin User</a>
                <a href="EmployeeRegistration.html">Add New Employee</a>
                <a href="EmployeeSalary.html">Add Employee Salary</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn2" onclick="myFunction2()">Report
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content" id="myDropdown2">
            <a href="AdminReport.php">Admin Report</a>
            <a href="EmployeeReport.php">Employee Report</a>
            <a href="SalaryReport.php">Salary Report</a>
        </div>
        </div>
        <a href="#home">MyAccount</a>
        <a href="#home">Change Password</a>
        <a href="logout.php" class="right">Logout</a>
    </div>
    <form action="salaryaction.php" method="post">
        <div class="wrapper">
            <div class="title">
                Employee Salary Registration Form
            </div>
            <div class="form">
                <div class="inputfield">
                    <label>Employee Code</label>
                    <input type="number" name="eid" class="input" required>
                </div>
                <div class="inputfield">
                    <label>Salary Month</label>
                    <div class="custom_select">
                        <select name="salaryMonth" required>
                            <option value="">Select</option>
                            <option value="January">January</option>
                            <option value="February">February</option>
                            <option value="March">March</option>
                            <option value="April">April</option>
                            <option value="May">May</option>
                            <option value="June">June</option>
                            <option value="July">July</option>
                            <option value="August">August</option>
                            <option value="September">September</option>
                            <option value="October">October</option>
                            <option value="November">November</option>
                            <option value="December">December</option>
                        </select>
                    </div>
                </div>
                <div class="inputfield">
                    <label>Basic Pay</label>
                    <input type="input" name="BasicPay" class="input" required>
                </div>
                <div class="inputfield">
                    <label>HRA</label>
                    <input type="number" name="hra" class="input" required>
                </div>
                <div class="inputfield">
                    <label>Mediclaim</label>
                    <input type="number" name="mediclaim" class="input" required>
                </div>
                <div class="inputfield">
                    <label>Travel Allowance</label>
                    <input type="number" name="travelallowance" class="input" required>
                </div>
                <div class="inputfield">
                    <label>Conveynance Allowance</label>
                    <input type="number" name="conallowance" class="input" required>
                </div>
                <div class="inputfield">
                    <label>Reimbursement</label>
                    <input type="number" name="reimbursement" class="input" required >
                </div>
                <div class="inputfield">
                    <label>Others</label>
                    <input type="number" name="others" class="input"  required>
                </div>
                
                <div class="inputfield terms">
                    <label class="check">
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label>
                    <p>Agreed to terms and conditions</p>
                </div>
                <div class="inputfield">
                    <input type="submit" value="Register" class="btn">
                </div>
            </div>
        </div>
    </form>


    <script>
        /* When the user clicks on the button, 
        toggle between hiding and showing the dropdown content */
        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }
        function myFunction2() {
            document.getElementById("myDropdown2").classList.toggle("show");
        }

        // Close the dropdown if the user clicks outside of it
        window.onclick = function (e) {
            if (!e.target.matches('.dropbtn')) {
                var myDropdown = document.getElementById("myDropdown");
                if (myDropdown.classList.contains('show')) {
                    myDropdown.classList.remove('show');
                }
            }
            if (!e.target.matches('.dropbtn2')) {
                var myDropdown = document.getElementById("myDropdown2");
                if (myDropdown.classList.contains('show')) {
                    myDropdown.classList.remove('show');
                }
            }

        }
    </script>
</body>

</html>