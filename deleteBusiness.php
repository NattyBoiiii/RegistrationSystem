<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/business_owner.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deleting Business Information</title>
    <style>
        body {
            font-family: "Arial";
        }
        input {
            font-size: 1.5em; 
            height: 50px;
            width: 200px;
        }
        table, th, td {
            border:1px solid black;
        }
    </style>
</head>
<body>
    <h1> Are you sure you want to delete this user?</h1>
    <?php $getEmployeeById = getEmployeeByID($pdo, $_GET['employee_id']); ?>
    <form action="core/handleforms.php?employee_id=<?php echo $_GET['employee_id']; ?>" method="POST">

        <div class="BusinessContainer" style="border-style: solid;
        font-family: 'Arial';">
            <p>First Name: <?php echo $getEmployeeById['first_name']; ?></p>
            <p>Last Name: <?php echo $getEmployeeById['last_name']; ?></p>
            <p>Gender: <?php echo $getEmployeeById['gender']; ?></p>
            <p>Phone Number: <?php echo $getEmployeeById['phone_number']; ?></p>
            <p>Personal Address: <?php echo $getEmployeeById['personal_address']; ?></p>
            <p>Assigned Job: <?php echo $getEmployeeById['assigned_job']; ?></p>
            <p>Working Hours: <?php echo $getEmployeeById['working_hours']; ?></p>
            <input type="submit" name="deleteBusinessBtn" value="Delete">
        </div>
    </form>
</body>
</html>