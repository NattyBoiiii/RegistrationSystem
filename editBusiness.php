<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/business_owner.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editing Business Information</title>
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
    <?php $getEmployeeById = getEmployeeByID($pdo, $_GET['employee_id']); ?>
    <form action="core/handleforms.php?employee_id=<?php echo $_GET['employee_id']; ?>" method="POST">
        <p>
            <label for="firstName">First Name</label>
            <input type="text" name="firstName" value="<?php echo $getEmployeeById['first_name']; ?>">
        </p>
        <p>
            <label for="lastName">Last Name</label>
            <input type="text" name="lastName" value="<?php echo $getEmployeeById['last_name']; ?>">
        </p>
        <p>
            <label for="gender">Gender</label>
            <input type="text" name="gender" value="<?php echo $getEmployeeById['gender']; ?>">
        </p>
        <p>
            <label for="phoneNumber">Phone Number</label>
            <input type="int" name="phoneNumber" value="<?php echo $getEmployeeById['phone_number']; ?>">
        </p>
        <p>
            <label for="personalAddress">Personal Address</label>
            <input type="text" name="personalAddress" value="<?php echo $getEmployeeById['personal_address']; ?>">
        </p>
        <p>
            <label for="assignedJob">Assigned Job</label>
            <input type="text" name="assignedJob" value="<?php echo $getEmployeeById['assigned_job']; ?>">
        </p>
        <p>
            <label for="workingHours">Working Hours</label>
            <input type="text" name="workingHours" value="<?php echo $getEmployeeById['working_hours']; ?>">
            <input type="submit" name="editBusinessBtn">
        </p>
</form>
</body>
</html>