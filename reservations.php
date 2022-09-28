<?php session_start(); ?>
<?php require_once('inc/connection.php'); ?>
<?php


$user_list = '';

// getting the list of users
$query = "SELECT * FROM reservations WHERE is_deleted=0 ORDER BY id";
$users = mysqli_query($connection, $query);

if ($users) {
	while ($user = mysqli_fetch_assoc($users)) {
		$user_list .= "<tr>";
		$user_list .= "<td>{$user['name']}</td>";
        $user_list .= "<td>{$user['email']}</td>";
		$user_list .= "<td>{$user['phone_number']}</td>";
		$user_list .= "<td>{$user['vehicle_type']}</td>";
		$user_list .= "<td>{$user['air_condition']}</td>";
        $user_list .= "<td>{$user['pickup_location']}</td>";
        $user_list .= "<td>{$user['drop_location']}</td>";
        $user_list .= "<td>{$user['pickup_date']}</td>";
        $user_list .= "<td>{$user['pickup_time']}</td>";
        $user_list .= "<td>{$user['stop_points']}</td>";
        $user_list .= "<td>{$user['returnDate']}</td>";
		$user_list .= "</tr>";
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
					<a href="allVehicles.php">
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
				<h3 style="margin-left: 20px;">ALL RESERVATIONS</h3>
			</div>
			<div class="col" style="margin-top: 2%;">
				<h3><a href="logout.php" class="link-primary" style="margin-left: 60%;">LOGOUT</a></h3>
			</div>
		</div>
		<hr />

		<table class="table table-success table-striped" style="width: 95%; margin-left: 2%; margin-top: 5%">
			<tr>
				<th cope="col">Name</th>
				<th cope="col">Email</th>
				<th cope="col">Phone</th>
                <th cope="col">Vehicle Type</th>
				<th cope="col">Air Condition</th>
				<th cope="col">Pickup Location</th>
                <th cope="col">Drop Location</th>
				<th cope="col">Pickup Date</th>
				<th cope="col">Pickup Time</th>
                <th cope="col">Stop Points</th>
				<th cope="col">Return date</th>
			</tr>

			<?php echo $user_list; ?>

		</table>


	</main>
</body>

</html>
<?php mysqli_close($connection) ?>