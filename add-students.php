<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "web2";

// to connect the database and the form
$conn = mysqli_connect($server,$username,$password,$database);

if(isset($_POST["submitapplication"]))
{
    // 1. fetch form data
    $fullname = $_POST["fullname"];
    $phonenumber = $_POST["phonenumber"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];
    $course = $_POST["course"];

    // 2. submit form data
    $insertdata = mysqli_query($conn, "INSERT INTO enrollment(fullname,phonenumber,email,gender,course)VALUES('$fullname','$phonenumber','$email','$gender','$course')");
    
    if($insertdata)
    {
        echo "Data submitted successfully";
    }
    else
    {
        echo "Error".mysqli_error($conn);
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
        <form action="enroll.php" method="POST" class="container">
                    <h5 class="card-title">Sign up today?</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="fullname" class="form-label">Full Name:</label>
                            <input type="text" name="fullname" class="form-control" placeholder="Enter your full name">
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label for="phonenumber" class="form-label">Phone Number:</label>
                            <input type="text" name="phonenumber" class="form-control" placeholder="+2547...">
                        </div>
                    </div>
                    <div class="row" style="padding-top:3%;">
                        <div class="col-lg-6">
                            <label for="email" class="form-label">Email Address:</label>
                            <input type="text" name="email" class="form-control" placeholder="Please enter your email address">
                        </div>
                        <div class="col-lg-6">
                            <label for="gender" class="form-label"><b>What is your gender</b></label>
                            <select name="gender" class="form-control" aria-label="Default select example">
                                <option selected>--select your gender--</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                    </div>   
                    <div class="row" style="padding-top:5%;">
                        <p>
                            In order to complete your registration to the bootcamp, you are required to select one course you will be undertaking. Please NOTE that this will be your learning track during the 2-weeks immersion.
                        </p>
                    </div>
                <div class="row">
                    <div class="col-lg-6">
                        <label for="gender" class="form-label"><b>What's your preffered course</b></label>
                        <select class="form-control" name="course"  aria-label="Default select example">
                            <option selected>--select your course--</option>
                            <option value="Software Development">Software Development</option>
                            <option value="Data analysis">Data analysis</option>
                        </select>
                    </div>
                </div>
           
                <div class="row text-cntre" style="padding-top:2%">
                    <p">
                        You agree by providing your information you understand all our data privacy and protection policy outlined in out Terms & condition and the Privacy Policy statements.
                    </p>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">Agree terms and condition.</label>
                    </div>
                    <div class="row" style="padding-top:8px;">
                        <div class="col-lg-3">
                            <button type="submit" name="submitapplication" class="btn btn-primary">submit application</button>
                        </div>
                    </div>
                    
                </div>
                </form>

			
		</div>	
	</div>
	
	<?php require_once('includes/scripts.php')?>
</body>
</html>