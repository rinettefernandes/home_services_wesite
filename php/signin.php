<?php 
session_start();

	include("connection.php");
	include("functions.php");
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in/Sign up</title>
    <link rel="stylesheet"  href="../css/signin.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">

</head>
<body>
    <div class="main">
        <input type="checkbox" id="chk" aria-hidden="true">
        <div class="signup">
            <form>
                <label for="chk" aria-hidden="true">Sign up</label>
                <input type="text" name="txt" placeholder="User name" required="">
                <input type="email" name="emails" placeholder="Email" required="">
                <input type="Password" name="pswd" placeholder="Password" required="">
                <button name="sub">Sign up</button>
            </form>
        </div>
		<?php
		if(isset($_POST['sub']))
		{
                 $user_name=$_POST['txt'];
				 $password=$_POST['pswd'];
				 if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
				 {
					
					$password=$_POST['pswd'];
					$ins="insert into users(user_name,password)values('$user_name','$password');";
					$conn->query($ins);

				 }
						}
		?>

        <div class="login">
            <form>
                <label for="chk" aria-hidden="true">Sign in</label>
            
                <input type="email" name="txt" placeholder="Email" required="">
                <input type="Password" name="pswd" placeholder="Password" required="">
              <button name="sub1">Sign in</button>
            </form>
        </div>
    </div>
    <div class="back_home">
        <a href="index.html"><h3>Back to home</h3></a>
    </div>
    <?php 



	


if($_SERVER['REQUEST_METHOD'] == "POST")
{
    //something was posted
    $user_name = $_POST['Email'];
    $password = $_POST['pwd'];

    if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
    {

        //read from database
        $query = "select * from users where user_name = '$user_name' limit 1";
        $result = mysqli_query($con, $query);

        if($result)
        {
            if($result && mysqli_num_rows($result) > 0)
            {

                $user_data = mysqli_fetch_assoc($result);

					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>

                

</body>
</html>