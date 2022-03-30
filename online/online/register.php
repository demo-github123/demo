<?php

    session_start();
?>
<?php

include 'db.php';
if(isset($_POST['btnsubmit']))
{ 
  $id=$_POST['txtid'];
   $name=$_POST['txtname'];
  $mobno=$_POST['txtmob'];
  $email=$_POST['txtemail'];
  $pass=$_POST['txtpass']; 
  
   
  $sql="SELECT email from student_reg WHERE email='$email'";
	$result=mysqli_query($con,$sql);
		
		if((mysqli_num_rows($result))>0)	
		{
            echo "<center><h3><script>alert('Sorry.. This email is already registered !!');</script></h3></center>";
            header("refresh:0;url=login.php");
        }
		else
		{
      $sql1="insert into student_reg values('$id','$name','$email',$mobno,'$pass')";
			if((mysqli_query($con,$sql1)))	
			echo "<center><h3><script>alert('Congrats.. You have successfully registered !!');</script></h3></center>";
			header('location: home.php');
		}  
  mysqli_close($con);
}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Register | Online Exam System</title>
		<link rel="stylesheet" href="scripts/bootstrap/bootstrap.min.css">
		<link rel="stylesheet" href="scripts/ionicons/css/ionicons.min.css">
		<link rel="stylesheet" href="css/form.css">
        <style type="text/css">
            body{
                  width: 100%;
                  background: url(image/book.png) ;
                  background-position: center center;
                  background-repeat: no-repeat;
                  background-attachment: fixed;
                  background-size: cover;
                }
          </style>
	</head>

	<body>
		<section class="login first grey">
			<div class="container">
				<div class="box-wrapper">				
					<div class="box box-border">
						<div class="box-body">
							<center> <h5 style="font-family: Noto Sans;">Register to </h5><h4 style="font-family: Noto Sans;">Online Exam System</h4></center><br>
							<form method="post" action="register.php" enctype="multipart/form-data">
                
              <div class="form-group">
									<label>Enter Your ID:</label>
									<input type="text" name="txtid" class="form-control" required />
								</div>
                
              
                <div class="form-group">
									<label>Enter Your Username:</label>
									<input type="text" name="txtname" class="form-control" required />
								</div>
								<div class="form-group">
									<label>Enter Your Email Id:</label>
									<input type="email" name="txtemail" class="form-control" required />
								</div>
								<div class="form-group">
									<label>Enter Your Password:</label>
									<input type="password" name="txtpass" class="form-control" required />
                                </div>

                 <div class="form-group">
									<label>Enter Your Mobile No:</label>
									<input type="text" name="txtmob" class="form-control" required />
								</div>								                              
								<div class="form-group text-right">
									<button class="btn btn-primary btn-block" name="btnsubmit">Register</button>
								</div>
								<div class="form-group text-center">
									<span class="text-muted">Already have an account! </span> <a href="login.php">Login </a> Here..
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>

		<script src="js/jquery.js"></script>
		<script src="scripts/bootstrap/bootstrap.min.js"></script>
	</body>
</html>