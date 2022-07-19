<?php 
$message = "";
require_once("logics/dbconnection.php");
$queryuser = mysqli_query($conn,"SELECT * FROM contactus WHERE no='".$_GET['id']."' ");

while($fetchuser=mysqli_fetch_array($queryuser))
{
    $id = $fetchuser['no'];
    $firstname = $fetchuser['firstname'];
    $lastname = $fetchuser['lastname'];
    $phonenumber = $fetchuser['phonenumber'];
    $emailaddress = $fetchuser['email'];
    $Message = $fetchuser['message'];
    
}

// update user records
if(isset($_POST["updateB"]))
{
    // fetch form data
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $number = $_POST['phonenumber'];
    $emailA = $_POST['email'];
    $MEssage = $_POST['message'];


    // update records
    $updateQuery = mysqli_query($conn, "UPDATE contactus SET firstname='$fname', lastname='$lname', phonenumber='$number', email='$emailA' WHERE no='".$_GET['id']."'");

    if($updateQuery)
    {
        $message= "Data Updated";
    }
    else
    {
        $message= "Error occured";
    }
}




?>
<!DOCTYPE html>
<html>
<?php require_once("includes/headers.php")?>
<body>
	<!-- All our code. write here   -->
	
	<?php require_once("includes/navbar.php")?>

	<div class="sidebar">
	<?php require_once("includes/sidebar.php")?>
	</div>

	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header bg-dark text-white text-center">
                            <h4>Edit Student: <?php echo $firstname ?></h4>
                            <span><?php echo $message ?></span>
                        </div>
                        <div class="card-body">
                            <form action="edit-contactus.php?id=<?php echo $id?>" method="POST" class="container">
                                    <div class="row">
                                        <div class="pb-3 col-lg-12">
                                            <label for="Firstname" class="form-label">First name:</label>
                                            <input type="text" name="firstname" value="<?php echo $firstname?>" class="form-control" placeholder="Enter your full name">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="pb-3 col-lg-12">
                                            <label for="lastname" class="form-label">Last Name:</label>
                                            <input type="text" name="lastname" value="<?php echo $lastname?>" class="form-control" placeholder="+2547...">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="pb-3 col-lg-12">
                                            <label for="phonenumber" class="form-label">Phone Number:</label>
                                            <input type="text" name="phonenumber" value="<?php echo $phonenumber?>" class="form-control" placeholder="Please enter your email address">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="pb-3 col-lg-12">
                                            <label for="email" class="form-label">Email Address:</label>
                                            <input type="text" name="email" value="<?php echo $emailaddress?>" class="form-control" placeholder="Please enter your email address">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="pb-3 col-lg-12">
                                            <label for="message" class="form-label">Message:</label>
                                            <input type="text" name="message" value="<?php echo $Message?>" class="form-control" placeholder="Please enter your email address">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-3 col-lg-12">
                                            <button style="margin-top:10px" type="submit" name="updateB" class="btn btn-primary">Update</button>
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
		</div>
	</div>



	<?php require_once("includes/scripts.php")?>

</body>
</html>