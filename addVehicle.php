<?php session_start(); ?>
<?php require_once('inc/connection.php'); ?>
<?php

$errors = array();
$capacity = '';
$passenger = '';
$luggage = '';
$transmission = '';
$condition = '';
$fuel = '';
$doors = '';

if (isset($_POST['submit'])) {
    $capacity = $_POST['capacity'];
    $passenger = $_POST['passenger'];
    $luggage = $_POST['luggage'];
    $condition = $_POST['condition'];
    $doors = $_POST['doors'];
    $transmission = $_POST['transmission'];
    $fuel = $_POST['fuel'];

    

    foreach ($req_fields as $field) {
        if (empty(trim($_POST[$field]))) {
            $errors[] = $field . ' is required';
        }
    }

    if (empty($errors)) {
        // no errors found... adding new record
        $capacity = mysqli_real_escape_string($connection, $_POST['capacity']);
        $passenger = mysqli_real_escape_string($connection, $_POST['passenger']);
        $luggage = mysqli_real_escape_string($connection, $_POST['luggage']);
        $doors = mysqli_real_escape_string($connection, $_POST['doors']);
        $transmission = mysqli_real_escape_string($connection, $_POST['transmission']);
        $condition = mysqli_real_escape_string($connection, $_POST['condition']);
        $fuel = mysqli_real_escape_string($connection, $_POST['fuel']);

        $query = "INSERT INTO vehicle ( ";
        $query .= "Transmission, Air_condition, Fuel_type, Luggage, Doors, Engine_capacity, Passenger, is_deleted";
        $query .= ") VALUES (";
        $query .= "'{$transmission}', '{$condition}', '{$fuel}', '{$luggage}', '{$doors}', '{$capacity}','{$passenger}',0";
        $query .= ")";

        $result = mysqli_query($connection, $query);

        if ($result) {
            // query successful... redirecting to users page
            header('Location: allVehicles.php?user_added=true');
        } else {
            $errors[] = 'Failed to add the new record.';
        }

    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>



<body style="margin-left: 20%;">

    <div class="row" style="width: 80%;">
        <div class="col" style="margin-top: 10%;">
            <h3 style="margin-left: 20px;">ADD NEW VEHICLE</h3>
        </div>
        <div class="col" style="margin-top: 10%;">
            <h3><a href="allVehicles.php" class="link-primary" style="margin-left: 50%;">BACK TO HOME</a></h3>
        </div>
        <hr />
    </div>

    <form class="row g-3" style="width: 80%;" action="addVehicle.php" method="post">
        <div class="col-md-6" style="margin-top: 10%;">
            <label for="inputEmail4" class="form-label">Engine capacity</label>
            <input type="text" class="form-control" id="" name="capacity" placeholder="Enter Engine capacity" required />
        </div>
        <div class="col-md-6" style="margin-top: 10%;">
            <label for="inputPassword4" class="form-label">Passenger</label>
            <input type="number" class="form-control" id="" name="passenger" placeholder="Enter passengers" required />
        </div>
        <div class="col-12">
            <label for="inputAddress" class="form-label">Luggage</label>
            <input type="number" class="form-control" id="" name="luggage" placeholder="Enter Luggage" required />
        </div>
        <div class="col-12">
            <label for="inputAddress2" class="form-label">Doors</label>
            <input type="number" class="form-control" id="" name="doors" placeholder="Enter doors" required />
        </div>
        <div class="col-md-4">
            <label for="inputState" class="form-label">Transmission</label>
            <select id="inputState" class="form-select" name="transmission" required>
                <option selected>Choose...</option>
                <option>Auto</option>
                <option>Manual</option>
            </select>
        </div>
        <div class="col-md-4">
            <label for="inputState" class="form-label">Air condition</label>
            <select id="inputState" class="form-select" name="condition" required>
                <option selected>Choose...</option>
                <option>Yes</option>
                <option>No</option>
            </select>
        </div>
        <div class="col-md-4">
            <label for="inputState" class="form-label">Fuel Type</label>
            <select id="inputState" class="form-select" name="fuel" required>
                <option selected>Choose...</option>
                <option>Petrol</option>
                <option>Diesel</option>
                <option>Electric</option>
            </select>
        </div>
        <div class="col-12">

        </div>
        <div class="col-12" style="margin-left: 90%;">
            <button type="submit" class="btn btn-primary" name="submit">Post Data</button>
        </div>
    </form>

</body>

</html>

<?php mysqli_close($connection) ?>