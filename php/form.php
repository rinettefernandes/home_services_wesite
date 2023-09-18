<?php 
session_start();

	include("connection.php");
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="../css/form.css">
</head>
<body>
<div id="includeHTML"><?php include("header.php"); ?></div>
    <form action="services.php" method="post">
    <div class="container">
        <div class="title">
            Place Your Order
        </div>
        <div class="form">
            <div class="input_field">
                <label>First Name</label>
                <input type="text" class="input" name="fname">
            </div>
            <div class="input_field">
                <label>Last Name</label>
                <input type="text" class="input"  name="lname">
            </div>
            <div class="input_field">
                <label>Email Address</label>
                <input type="text" class="input"  name="email">
            </div>
            <div class="input_field">
                <label>Service</label>
                
                <select class="selectbox"name="service">
                    <option value="not selected">Select</option>
                    <option value="gardening">Gardening</option>
                    <option value="cleaning">Cleaning</option>
                    <option value="plumbing">Plumbing</option>
                </select>
            </div>
            <div class="input_field">
               
                <label>Address</label>
              <textarea name="address"></textarea>
          
            </div>   <div class="input_field">
                <label>Phone number</label>
                <input type="text" class="input" name="phone">
            </div>
            <div class="input_field">
                <input type="submit" value="submit" name="submitf" class="btn">
            </div>

        </div>
    </div>
    
</form>
<div id="includefooter"><?php include("footer.php"); ?></div>

</body>
</html>
<?php
	if($_SERVER['REQUEST_METHOD'] == "POST")

{
   $fname=$_POST['fname'];
   $lname=$_POST['lname'];
   $email=$_POST['email'];
   $service=$_POST['service'];
   $address=$_POST['address'];
   $phone=$_POST['phone'];
   $sql="INSERT INTO FORM VALUES('$fname','$lname','$email','$service','$phone','$address')";
   $result=$conn->query($sql);


}
?>