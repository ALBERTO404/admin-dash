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
									<th>Phone Number</th>
									<th>Email</th>
									<th>message</th>
									<th>created_at</th>
								</tr>
							</thead>
							<tbody>
								<?php while($fetchRecords = mysqli_fetch_array($sqlquery)) {?>
									<tr>
										<td><?php echo $fetchRecords['no']?></td>
										<td><?php echo $fetchRecords['firstname']?></td>
										<td><?php echo $fetchRecords['phonenumber']?></td>
										<td><?php echo $fetchRecords['email']?></td>
										<td><?php echo $fetchRecords['message']?></td>
										<td><?php echo $fetchRecords['created_at']?></td>
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