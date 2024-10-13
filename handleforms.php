<?php
require_once 'dbConfig.php';
require_once 'business_owner.php';

if (isset($_POST['insertNewBusinessBtn'])) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $gender = $_POST['gender'];
    $phoneNumber = $_POST['phoneNumber'];
    $personalAddress = $_POST['personalAddress'];
    $assignedJob = $_POST['assignedJob'];
    $workingHours = $_POST['workingHours'];

    $query = insertIntonavaretteDJ($pdo, $firstName, $lastName, $gender, $phoneNumber,
    $personalAddress, $assignedJob, $workingHours);

    if ($query) {
        header("Location: ../index.php");
    }

    else {
        echo "query failed";
    }
}

if (isset($_POST['editBusinessBtn'])){
    $employee_id = $_GET['employee_id'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $gender = $_POST['gender'];
    $phoneNumber = $_POST['phoneNumber'];
    $personalAddress = $_POST['personalAddress'];
    $assignedJob = $_POST['assignedJob'];
    $workingHours = $_POST['workingHours'];

    $query = updateABusiness($pdo, $firstName, $lastName, $gender, $phoneNumber,
    $personalAddress, $assignedJob, $workingHours, $employee_id);

    if ($query){
        header("Location: ../index.php");
    }
    else {
        echo "Update failed";
    }
}

if (isset($_POST['deleteBusinessBtn'])) {
    $query = deleteABusiness($pdo, $_GET['employee_id']);

    if ($query) {
        header("Location: ../index.php");
    }
    else {
        echo "Deletion failed";
    }
}
?>
