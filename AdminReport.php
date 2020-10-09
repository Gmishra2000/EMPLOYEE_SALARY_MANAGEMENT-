<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin User Registration</title>
  <link rel="stylesheet" href="./CSS/style.css">
  <link rel="stylesheet" href="./CSS/dashboard.css">
  <link rel="stylesheet" href="./CSS/Employee_Registration.css">
  <link rel="stylesheet" href="./CSS/admin_report.css">

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
  

  <?php
  //echo "hello user";
session_start();
//echo "Hello ".$_SESSION["user_name"];

if(isset($_SESSION["user_name"]) && $_SESSION["user_name"]!=""){
	echo "Hello ".$_SESSION["user_name"];
} else {
	//echo "you are not loged in";
	header ("Location: loginform.php");	
}
  /** database connection **/
  require("function.php");
  $con = dbConnect();

  $read_sql = "SELECT * FROM admin_register";
  //var_dump($read_sql);
  $read_data = $con->query($read_sql) or die($con->error);
  //var_dump($read_data);
  echo "<pre>";
  /*while($data_array = $read_data->fetch_assoc()) {
	print_r($data_array);
	//echo $data_array["id"];
	//echo $data_array["student_name"];
	//echo $data_array["phone"];
	
} */

  ?>
  <!-- Table -->


  <!--<a href="add_form.php">add Record</a>-->
  <div class="res-tab">
    <table >
      <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>User Role</th>
        <th>Username</th>
        <th>Password</th>
        <th>Gender</th>
        <!-- <th>Designation</th>
    <th>Email id</th>
    <th>Phone no.</th>
    <th>Address</th>
    <th>Postal code</th> -->
        <th>Action</th>
      </tr>

      <?php
      while ($data_array = $read_data->fetch_assoc()) {
      ?>
        <tr>
          <td><?php echo $data_array["id"]; ?></td>
          <td><?php echo $data_array["firstName"]; ?></td>
          <td><?php echo $data_array["lastName"]; ?></td>
          <td><?php echo $data_array["userRole"]; ?></td>
          <td><?php echo $data_array["username"]; ?></td>
          <td><?php echo $data_array["password"]; ?></td>
          <td><?php echo $data_array["gender"]; ?></td>

          <td>
            <a href="delete_action.php?id=<?php echo $data_array["id"]; ?>" onclick="javascript: return confirm('Are you sure you want to delete this record?')"><i class="fa fa-trash" style="color:red; font-size:15px"></i>delete</a>
            <a href="edit_form.php?id=<?php echo $data_array["id"]; ?>">edit</a>
          </td>

        <?php
      }
        ?>
        </tr>


    </table>
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

</body>

</html>