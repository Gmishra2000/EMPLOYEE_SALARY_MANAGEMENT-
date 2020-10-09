<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="./CSS/dashboard.css">
  <link rel="stylesheet" href="./CSS/style.css">
</head>

<body>
<?php
  
  session_start();
  if(isset($_SESSION["user_name"]) && $_SESSION["user_name"]!=""){
    //echo "Hello ".$_SESSION["user_name"];
  } else {
    //echo "you are not loged in";
    header ("Location: login.php");	
  }

  ?>
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
  <div class="row">
    <div class="column">
      <div class="content">
        <img src="./Images/ManageEmployee.jpg" alt="Employee Mangement" style="width:100%">
        <h3>Manage Employee</h3>
        <p>The main objective of this module is to provide all the functionality related to employee. It tracks all the
          information of the employee.This is a role based module where admin can perform each and every operation on
          data.Calculation of basic salaries of every employee.</p>
      </div>
    </div>
    <div class="column">
      <div class="content">
        <img src="./Images/ManageSalary.jpg" alt="Salary Management" style="width:100%">
        <h3>Manage Salary Service</h3>
        <p>Add custom employee, category (i.e is department projects )group your users by offices. Ability to display
          balance in hours or in days. Assigning employees based on their salary ,providing different categories.The
          employee will be able to view only his or her data.</p>
      </div>
    </div>
    <div class="column">
      <div class="content">
        <img src="./Images/ManageSystem.png" alt="System Management" style="width:100%">
        <h3>Manage System User</h3>
        <p>3 level of users (administrators , managers, employees) each with their own different permission.Employees
          can only see their salaries slip ,administrator can add delete update record according to the works employees
          work.</p>
      </div>
    </div>
    <div class="column">
      <div class="content">
        <img src="./Images/ManageSalarySlip.jpg" alt="Salary slip" style="width:100%">
        <h3>Manage Salary Slips</h3>
        <p>Ability to choose different calendar year start dates for each user. Ability to upload your company logo to
          personalise the interface. Ability to print the required slip of the salary. Ability to set time of pending
          request and holiday reminders.</p>
      </div>
    </div>
    <!-- END GRID -->
  </div>
  </main>


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