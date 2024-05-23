<?php
  $conn = mysql_connect('localhost', 'root', '');
  if (!$conn)
  {
    die("Database Connection Failed" . mysql_error());
  }

  $select_db = mysql_select_db('payroll_s');
  if (!$select_db)
  {
    die("Database Selection Failed" . mysql_error());
  }

  if(isset($_POST['submit'])!="")
  {
    $lname      = $_POST['lname'];
    $fname      = $_POST['fname'];
    $gender     = $_POST['gender'];
    $type       = $_POST['emp_type'];
    $division   = $_POST['division'];
    $contact    = $_POST['contact'];
    $address    = $_POST['address'];
    $email    = $_POST['email'];

    $sql = mysql_query("INSERT into employee(lname, fname, gender, emp_type, division, contact, address, email)VALUES('$lname','$fname','$gender', '$type', '$division', '$contact', '$address', '$email')");

    if($sql)
    {
      ?>
        <script>
            alert('Employee has been added!');
            window.location.href='home_employee.php?page=emp_list';
        </script>
      <?php 
    }

    else
    {
      ?>
        <script>
            alert('An Error Occured');
            window.location.href='index.php';
        </script>
      <?php 
    }
  }
?>