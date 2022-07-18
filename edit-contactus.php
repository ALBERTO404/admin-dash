<?php
$message ="";
require_once('logics/dbconnection.php');
$queryuser=mysqli_query($conn, "SELECT * FROM enrollment WHERE no='".$_GET['id']."'");


while($fetchuser=mysqli_fetch_array($queryuser))
{
	$id= $fetchuser['no'];
	$fullname=$fetchuser['fullname'];
	$phonenumber= $fetchuser['phonenumber'];
	$email= $fetchuser['email'];
	$gender=$fetchuser['gender'];
	$course=$fetchuser['course'];
}

//update user records
if(isset($_POST['updateRecords']))
{
	//fetch form data
	$name=$_POST['fullname'];
	$phone=$_POST['phonenumber'];
	$emailaddress=$_POST['email'];
	$genderform=$_POST['gender'];
	$courseform=$_POST['course'];

	//update records
	$updateQuery=mysqli_query ($conn, "UPDATE enrollment SET fullname= '$fullname', phone='$phone', email='$email', gender='$genderform', course='$course' WHERE no='".$_GET['id']."'");
	if($updateQuery)
	{
		$message="Data update";
	}
	else{
		$message="error";
	}
}
?>

<!DOCTYPE html>
<html>
<?php require_once('includes/headers.php')?>
<body>
	<!-- All our code. write here   -->
	<?php require_once('includes/navbar.php')?>

	<div class="sidebar">
	<?php require_once('includes/sidebar.php')?>


	</div>
	<div class="main-content">
		<div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header bg-dark text-center text-white">
                            <h4>Edit Student:  </h4>
							<span><?php echo $message ?></span>
                        </div>
                		<div class="card-body">
							<form action="edit-enrollment.php?id=<?php echo $id?>" method="POST">
								<div class="row">
									<div class="mb-3 col-lg-6 col-md-6 col-sm-12">
										<label for="fullname" class="form-label">Full name</label>
										<input type="text" class="form-control" name="fullname" value="<?php echo$fullname?>"placeholder="Enter your full name">
									</div>
									<div class="mb-3 col-lg-6 col-md-6 col-sm-12">
										<label for="phonenumber" class="form-label">Phone </label>
										<input type="tel" class="form-control" name="phonenumber" value="<?php echo$phonenumber?>" placeholder="+2547...">
									</div>
								</div>
								<div class="row">
									<div class="mb-3 col-lg-6 col-md-6 col-sm-12">
										<label for="email" class="form-label">Email address</label>
										<input type="email" class="form-control" name="email" value="<?php echo$email?>" placeholder="Please enter your email">
									</div>
									<div class="mb-3 col-lg-6 col-md-6 col-sm-12">
										<label for="gender" class="form-label">What's your gender</label>
										<select name="gender" class="form-control" aria-label="default select example">
											<option value="<?php echo $gender?>">Male</option>
											<option value="Female">Female</option>
										</select>
									</div>
									
									<div class="mb-3 col-lg-6">
										<select name="course" class="form-control multiplchose_questiontypes" id="selector">
											<option value="<?php echo $course?>">web design</option>
											<option value="cyber security">cyber security</option>
											<option value="android development">android development</option>

										</select>
									</div>    
								</div>
								<div class="row">
									<div class="col-lg-6">
										<button type="submit" class="btn btn-primary">Update records</button>
									</div>
								</div>
        					</form>
                    	</div>
					</div>

                </div>
            </div>
			
		</div>	
	</div>
	
	<?php require_once('includes/scripts.php')?>
</body>
</html>