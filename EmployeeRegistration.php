<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Employee Registration</title>
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
  <form action= "employeeaction.php" method="post">
  <div class="wrapper">
    <div class="title">
      Employee Registration Form
    </div>
    <div class="form">
      <div class="inputfield">
        <label>First Name</label>
        <input type="text" class="input" name="firstName" required>
      </div>
      <div class="inputfield">
        <label>User Role</label>
        <div class="custom_select">
          <select name="userRole" required>
            <option value="">Select</option>
            <option value="Normal User">Normal User</option>
            
          </select>
        </div>
      </div>
      <div class="inputfield">
        <label>UserName</label>
        <input type="text" class="input" name="username" required>
      </div>
      <div class="inputfield">
        <label>Password</label>
        <input type="password" class="input" name="password" required>
      </div>
      <div class="inputfield">
        <label>Confirm Password</label>
        <input type="password" class="input" name="password" required>
      </div>
      <div class="inputfield">
        <label>Gender</label>
        <div class="custom_select">
          <select name="gender" required>
            <option value="">Select</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
          </select>
        </div>
      </div>
      <div class="inputfield">
        <label>Designation</label>
        <div class="custom_select">
          <select name="designation" required>
            <option value="">Select</option>
            <option value="Software Developer">Software Developer</option>
            <option value="System Administrator">System Administrator</option>
            <option value="HR">HR</option>
            <option value="HR">Analyst</option>
          </select>
        </div>
      </div>
      <div class="inputfield">
        <label>Email Address</label>
        <input type="text" class="input" name="emailAddress" required>
      </div>
      <div class="inputfield">
        <label>Phone Number</label>
        <input type="text" class="input" name="phoneNumber" required>
      </div>
      <div class="inputfield">
        <label>Address</label>
        <textarea  name="address" class="textarea" required></textarea>
      </div>
      <div class="inputfield">
        <label>Postal Code</label>
        <input type="text" class="input" name="postalCode" required>
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