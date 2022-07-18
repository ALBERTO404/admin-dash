<?php
require_once('logics/dbconnection.php');
$sqlquery = mysqli_query($conn,"SELECT * FROM contactus");
?>
<!DOCTYPE html>
<html>
<?php require_once('includes/headers.php')?>
<body>
	<!-- All our code. write here   -->
	<div class="header">
	<?php require_once('includes/navbar.php')?>
	</div>
	<div class="sidebar">
	<?php require_once('includes/sidebar.php')?>
	</div>
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 pt-3">
					<div class="card-header bg-dark text-white text-center">
						<span>Messages</span>
					</div>
					<div class="card-body">
						<table class="table table-striped table-hover">
							<thead>
								<tr>
									<th>No.</th>
									<th>First Name</th>
									<th>last name</th>
									<th>Phone Number</th>
									<th>Email</th>
									<th>message</th>
									<th>created</th>
								</tr>
							</thead>
							<tbody>
								<?php while($fetchRecords = mysqli_fetch_array($sqlquery)) {?>
									<tr>
										<td><?php echo $fetchRecords['no']?></td>
										<td><?php echo $fetchRecords['firstname']?></td>
										<td><?php echo $fetchRecords['lastname']?></td>
										<td><?php echo $fetchRecords['phonenumber']?></td>
										<td><?php echo $fetchRecords['email']?></td>
										<td><?php echo $fetchRecords['message']?></td>
										<td><?php echo $fetchRecords['created']?></td>
										<td>
											<a href="edit-contactus.php?id=<?php echo $fetchRecords['no'] ?>" class="btn btn-primary"><i class="fa fa-edit"></i></a>
											<a href="view-contactus.php?id=<?php echo $fetchRecords['no'] ?>"  class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
											<a href="delete-contactus.php?id=<?php echo $fetchRecords['no']?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
									</td>
									</tr>
								<?php }?>
								
							</tbody>
						</table>
					</div>
					<div class="cardfooter"></div>
				</div>
			</div>
		</div>
	</div>
   
	
	<?php require_once('includes/scripts.php')?>
</body>
</html>