<?php 

include("../LoginSystem/config.php");

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: signin-signup.php");
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password =($_POST['password']);
	$cpassword =($_POST['cpassword']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM user_tbl WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO user_tbl (username, email, password, cpassword)
					VALUES ('$username', '$email', '$password', '$cpassword')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Registration has been successfull.')</script>";
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
			} else {
				echo "<script>alert('Woops! Something Went Wrong.')</script>";
			}
		} else {
			echo "<script>alert('Woops! username or password Already Exists.')</script>";
		}
		
	} else {
		echo "<script>alert('Password Not Matche.')</script>";
	}
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="styles.css">

    <!---Tab Logo---->
    <link rel="icon" href="../images/arenalogo.png">
    
    <script defer src="script.js"></script>

    <title>signin-signup</title>
</head>

<body>
    <div class="container">
        <div class="signin-signup">
            <form id="form" action="" method="post" class="sign-in-form">
                <h2 class="title">Sign in</h2>
                <div class="input-field">
                    <i class="fa fa-user"></i>
                    <input type="text" name="username" id="username" value="<?php echo $username; ?>" placeholder="Username" required>
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" value="<?php echo $_POST['password']; ?>" placeholder="Password" required>
                </div>
                <input type="submit" name="login" id="submit" value="Login" class="btn">
                <p class="account-text">Don't have an account? <a href="#" id="sign-up-btn2">Sign up</a></p>
                <a href="http://localhost/project/loginsystem/forgot_password.php"><u>Forgot Password?</u></a>
                <a class="back" href="http://localhost/project/index%20page/loading_page.php">Back</a>
            </form>
            <form action="" method="post" class="sign-up-form">
                <h2 class="title">Sign up</h2>
                
                
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" id="name" name="username" value="<?php echo $username; ?>" placeholder="Username" required>
                </div>
                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input type="email" id="email" name="email" value="<?php echo $email; ?>" placeholder="Email" required>
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" value="<?php echo $_POST['password']; ?>" placeholder="Password" required>
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" placeholder="Conferm Password" required>
                </div>
                <input type="submit" name="submit" value="Sign up" class="btn">
            </form>
        </div>
        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Member Of Club?</h3>
                    <p>To connect with us you need to login first</p>
                    <button class="btn" id="sign-in-btn">Sign in</button>
                </div>
                <img src="signin.svg" alt="" class="image">
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>New User?</h3>
                    <p>To conect with us you need to sign in or sign up first</p>
                    <button class="btn" id="sign-up-btn" name="sign up">Sign up</button>
                </div>
                <img src="signup.svg" alt="" class="image">
            </div>
        </div>
    </div>
    <script src="app.js"></script>
</body>
</html>

<?php

if (isset($_POST['login'])) 
{
	$username = $_POST['username'];
	
	$password =$_POST['password'];

    $get_login="SELECT * from user_tbl where username='$username' AND password='$password' ";

    $run_login = mysqli_query($conn,$get_login);

    $row_login = mysqli_num_rows($run_login);

    if($row_login==0)
        {
            echo"<script> alert('username or password is wrong!') </script>";
            
        }
        else
        {
            echo"<script> alert('login successfully') </script>";
            $_SESSION['username'] = $username;
            echo"<script> window.open('../index page/index_page.php','_self') </script>"; 
    
        }   
}
?>