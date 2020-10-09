<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin User Registration</title>
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
        <a href="AdminRegistration.php">Add New Admin User</a>
        <a href="EmployeeRegistration.php">Add New Employee</a>
        <a href="EmployeeSalary.php">Add Employee Salary</a>
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