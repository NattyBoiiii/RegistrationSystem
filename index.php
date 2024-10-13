<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/business_owner.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="wodth=device-width, initial-scale=1.0">
    <title>Navarette_Dream_Job</title>
    <style>
        body {
            font-family: "Arial";
        }
        input {
            font-size: 1.5em;
            height: 50px;
            width: 200px;
        }
        table{
            border-collapse: collapse;
        }
        td,th{
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <h3> Welcome to the Business Informations. Input your details to register</h3>
    <form action="core/handleforms.php" method="POST">
        <p><label for="firstName">First Name</label> <input type="text" name="firstName" required></p>
        <p><label for="lastName">Last Name</label> <input type="text" name="lastName" required></p>
        <p><label for="gender">Gender</label> <input type="text" name="gender" required></p>
        <p><label for="phoneNumber">Phone Number</label> <input type="number" name="phoneNumber" required></p>
        <p><label for="personalAddress">Personal Address</label> <input type="text" name="personalAddress" required></p>
        <p><label for="assignedJob">Assigned Job</label> <input type="text" name="assignedJob" required></p>
        <p><label for="workingHours">Working Hours</label> <input type="text" name="workingHours" required>
            <input type="submit" name="insertNewBusinessBtn">
        </p>
    </form>
</body>
</html>

<table style="width:50%; margin-top: 50px;">
    <tr>
        <th>Employee ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Gender</th>
        <th>Phone Number</th>
        <th>Personal Address</th>
        <th>Assigned Job</th>
        <th>Working Hours</th>
    </tr>

    <?php $seeAllBusinessINformations = seeAllnavaretteDJ($pdo); ?>
    <?php foreach ($seeAllBusinessINformations as $row) { ?>
    <tr>
        <td><?php echo $row['employee_id']; ?></td>
        <td><?php echo $row['first_name']; ?></td>
        <td><?php echo $row['last_name']; ?></td>
        <td><?php echo $row['gender']; ?></td>
        <td><?php echo $row['phone_number']; ?></td>
        <td><?php echo $row['personal_address']; ?></td>
        <td><?php echo $row['assigned_job']; ?></td>
        <td><?php echo $row['working_hours']; ?></td>
        <td>
            <a href="editBusiness.php?employee_id=<?php echo $row['employee_id'];?>">Edit</a>
            <a href="deleteBusiness.php?employee_id=<?php echo $row['employee_id'];?>">Delete</a>
        </td>
    </tr>    
    <?php } ?>
</table>
