<html>

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




  <!-- <h1>edit form</h1> -->
  <?php

  require("function.php");
  session_start();
  auth();
  $connect = dbConnect();

  $id = $_REQUEST['id'];
  //echo $id;

  $editform_data_sql = "SELECT * FROM admin_register WHERE admin_register.id = '$id'";
  //var_dump($editform_data_sql);

  $edit_data = $connect->query($editform_data_sql);
  //var_dump($edit_data);

  $data = $edit_data->fetch_assoc();
  ?>




  <form action="edit_action.php" method="post" enctype="multipart/form-data">


    <div class="wrapper">
      <div class="title">
        Edit Form
      </div>

      <div class="form">
        <div><input type="hidden" class="input" name="id" value="<?php echo ($_REQUEST['id']); ?>" required></div>
        <div class="inputfield">
          <label>First Name</label>
          <input type="text" class="input" name="firstName" value="<?php echo ($data["firstName"]); ?>" required>
        </div>
        <div class="inputfield">
          <label>Last Name</label>
          <input type="text" class="input" name="lastName" value="<?php echo ($data["lastName"]); ?>" required>
        </div>
        <div class="inputfield">
          <label>User Role</label>
          <div class="custom_select">
            <select name="userRole" value="<?php echo ($data["userRole"]); ?>">
              <option value="<?php echo ($data["userRole"]); ?>">Select</option>
              <option value="Admin">Admin</option>

            </select>
          </div>
        </div>
        <div class="inputfield">
          <label>UserName</label>
          <input type="text" class="input" name="username" value="<?php echo ($data["username"]); ?>" required>
        </div>
        <div class="inputfield">
          <label>Password</label>
          <input type="password" class="input" name="password" value="<?php echo ($data["password"]); ?>" required>
        </div>
        <div class="inputfield">
          <label>Confirm Password</label>
          <input type="password" class="input" name="password" value="<?php echo ($data["password"]); ?>" required>
        </div>
        <div class="inputfield">
          <label>Gender</label>
          <div class="custom_select">
            <select name="gender" value="<?php echo ($data["gender"]); ?>">
              <option value="<?php echo ($data["gender"]); ?>">Select</option>
              <option value="male" required>Male</option>
              <option value="female" required>Female</option>
            </select>
          </div>
        </div>
        <div class="inputfield">
          <label>Designation</label>
          <div class="custom_select">
            <select name="designation" value="<?php echo ($data["designation"]); ?>" required>
              <option value="">Select</option>
              <option value="Software Developer" required>Software Developer</option>
              <option value="System Administrator" required>System Administrator</option>
              <option value="HR" required>HR</option>
              <option value="HR" required>Analyst</option>
            </select>
          </div>
        </div>
        <div class="inputfield">
          <label>Email Address</label>
          <input type="text" class="input" name="emailAddress" value="<?php echo ($data["emailAddress"]); ?>" required>
        </div>
        <div class="inputfield">
          <label>Phone Number</label>
          <input type="text" class="input" name="phoneNumber" value="<?php echo ($data["phoneNumber"]); ?>" required>
        </div>
        <div class="inputfield">
          <label>Address</label>
          <input type="text" class="textarea" name="address" value="<?php echo ($data["address"]); ?>" required></textarea>
        </div>
        <div class="inputfield">
          <label>Postal Code</label>
          <input type="text" class="input" name="postalCode" value="<?php echo ($data["postalCode"]); ?>" required>
        </div>
        <div class="inputfield terms">
          <label class="check">
            <input type="checkbox" required>
            <span class="checkmark"></span>
          </label>
          <p>Agreed to terms and conditions</p>
        </div>
        <div>
          <input type="submit" value="Save" />
          <input type="reset" value="Clear Form" />
          <br>
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
    window.onclick = function(e) {
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



  </div>
</body>

</html>