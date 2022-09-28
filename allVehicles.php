<?php session_start(); ?>
<?php require_once('inc/connection.php'); ?>
<?php


$vehicle_list = '';

// getting the list of users
$query = "SELECT * FROM vehicle WHERE is_deleted=0 ORDER BY id";
$users = mysqli_query($connection, $query);

if ($users) {
	while ($vehicle = mysqli_fetch_assoc($users)) {
		$vehicle_list .= "<tr>";
		$vehicle_list .= "<td>{$vehicle['Transmission']}</td>";
		$vehicle_list .= "<td>{$vehicle['Air_condition']}</td>";
		$vehicle_list .= "<td>{$vehicle['Fuel_type']}</td>";
		$vehicle_list .= "<td>{$vehicle['Luggage']}</td>";
		$vehicle_list .= "<td>{$vehicle['Doors']}</td>";
		$vehicle_list .= "<td>{$vehicle['Engine_capacity']}</td>";
		$vehicle_list .= "<td>{$vehicle['Passenger']}</td>";
		$vehicle_list .= "</tr>";
	}
} else {
	echo "Database query failed.";
}
?>



<!DOCTYPE html>
<html>

<head>
	<title>ADMIN_PANEL</title>
</head>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="css/main.css">


<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">

<body style="overflow-x:hidden;">
	<div class="con">
		<div class="sidebar">
			<ul>
				<li>
					<a href="#">
						<i class="fas fa-circle-user"></i>
						<div class="title">Admin</div>
					</a>
				</li>
				<li>
					<a href="regUsers.php">
						<i class="fas fa-user-check"></i>
						<div class="title">Reg.Customers</div>
					</a>
				</li>
				<li>
					<a href="regDrivers.php">
						<i class="fas fa-users"></i>
						<div class="title">Reg.Drivers</div>
					</a>
				</li>
				<li>
					<a href="reservations.php">
						<i class="fas fa-map-location-dot"></i>
						<div class="title">Reservations</div>
					</a>
				</li>
				<li>
					<a href="allVehicle.php">
						<i class="fas fa-car"></i>
						<div class="title">Post a Vehicle</div>
					</a>
				</li>
			</ul>
		</div>
	</div>
	<main style="margin-left: 20%;">
		<div class="row">
			<div class="col" style="margin-top: 2%;">
				<h3 style="margin-left: 20px;">ALL REGISTERED DRIVERS</h3>
			</div>
			<div class="col" style="margin-top: 2%;">
				<h3><a href="logout.php" class="link-primary" style="margin-left: 60%;">LOGOUT</a></h3>
			</div>
		</div>
		<hr style="margin-bottom: 5%;"/>
		<a href="addVehicle.php"><h3 style="margin-left: 5%;">ADD VEHICLE</h3></a>
			
		
		<table class="table table-success table-striped" style="width: 90%; margin-left: 4%; margin-top: 3%">
			<tr>
				<th cope="col">Transmission</th>
				<th cope="col">Air condition</th>
				<th cope="col">Fuel type</th>
				<th cope="col">Luggage</th>
				<th cope="col">Doors</th>
				<th cope="col">Engine capacity</th>
				<th cope="col">Passenger</th>
			</tr>

			<?php echo $vehicle_list; ?>

		</table>


	</main>
</body>

</html>
<?php mysqli_close($connection) ?>