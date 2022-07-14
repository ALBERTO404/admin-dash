<?php
//database connectioj
require_once('logics/dbconnection.php');
$sqlFetchStudent= mysqli_query($conn,
"SELECT * FROM enrollment WHERE no='".$_GET['id']."' ");
while($fetchStudentRecords= mysqli_fetch_array($sqlFetchStudent))
{
    $Fullname= $fetchStudentRecords['fullname'];
    $phone= $fetchStudentRecords['phonenumber'];
    $email=$fetchStudentRecords['email'];
    $gender=$fetchStudentRecords['gender'];
    $course=$fetchStudentRecords['course'];
    $created_at=$fetchStudentRecords['created_at'];
}


?>
<head>
    <title>Bootstrap Admin Template</title>
	<meta charset="UTF-8">
	<meta name="description" content="Creating admin dashboard">
	<meta name="keywords" content="HTML,CSS,Zalego,Technology,Zalego institute,JavaScript">
	<meta name="author" content="Your name">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="style.css">

</head>
<body>
	<!-- All our code. write here   -->
	<?php require_once('includes/navbar.php')?>

	<div class="sidebar">
	<?php require_once('includes/sidebar.php')?>


	</div>
	<div class="main-content">
		<div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header bg-dark text-white text-center">
                            <h4 class="card-title">personal information</h4>
                        </div>
                        <div class="card-body">
                            <ul class ="list group">
                                <li class="list-group-item">FullName:<span class="float-right bg-primary"><?php echo $Fullname?></span> </li>
                                <li class="list-group-item">Email:<span class="float-right bg-danger"><?php echo $email?></span></li>
                                <li class="list-group-item">phone number:<span class="float-right bg-secondary"><?php echo $phone?></span></li>
                            </ul>

                		
					</div>

                </div>
                <div class="col-lg-15">
                    <div class="card">
                        <div class="card-header bg-dark text-white text-center">
                            <h4 class="card-title">other information</h4>
                        </div>
                        <div class="card-body">
                            <ul class ="list group">
                                <li class="list-group-item">Gender:<span class="float-right bg-primary"><?php echo $gender?></span> </li>
                                <li class="list-group-item">course:<span class="float-right bg-danger"><?php echo $course?></span></li>
                                <li class="list-group-item">Enrolled on:<span class="float-right bg-secondary"><?php echo $created_at?></span></li>
                            </ul>

                		
					</div>

                </div>
            </div>
			
		</div>	
	</div>
	
	<?php require_once('includes/scripts.php')?>
</body>
</html>