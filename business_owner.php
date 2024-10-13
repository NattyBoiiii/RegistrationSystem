<?php

require_once 'dbConfig.php';

function insertIntonavaretteDJ ($pdo, $first_name, $last_name, $gender, $phone_number, 
    $personal_address, $assigned_job, $working_hours){
    
    $sql = "INSERT INTO business_informations (first_name, last_name, gender, phone_number,
        personal_address, assigned_job, working_hours) VALUES (?,?,?,?,?,?,?)";

        $stmt = $pdo->prepare($sql);

        $executeQuery = $stmt->execute([$first_name, $last_name, $gender, $phone_number, 
        $personal_address, $assigned_job, $working_hours]);

        if ($executeQuery) {
            return true;
        }

}

function seeAllnavaretteDJ($pdo) {
    $sql = "SELECT * FROM business_informations";
    $stmt = $pdo->prepare($sql);
    $executeQuery = $stmt->execute();
    if ($executeQuery){
        return $stmt->fetchAll();
    }
}

function getEmployeeByID($pdo, $employee_id){
    $sql = "SELECT * FROM business_informations WHERE employee_id = ?";
    $stmt = $pdo->prepare($sql);
    if ($stmt->execute([$employee_id])) {
        return $stmt->fetch();
    }
}

function updateABusiness($pdo, $first_name, $last_name, $gender, $phone_number,
    $personal_address, $assigned_job, $working_hours, $employee_id){
        
    $sql = "UPDATE business_informations
                SET first_name = ?,
                    last_name = ?,
                    gender = ?,
                    phone_number = ?,
                    personal_address = ?,
                    assigned_job = ?,
                    working_hours = ?
            WHERE employee_id = ?";
    $stmt = $pdo->prepare($sql);

    $executeQuery = $stmt->execute([$first_name, $last_name, $gender, $phone_number, 
        $personal_address, $assigned_job, $working_hours, $employee_id]);
    
    if ($executeQuery){
        return true;
    }
    }

function deleteABusiness($pdo, $employee_id){
    $sql = "DELETE FROM business_informations WHERE employee_id = ?"; 
    $stmt = $pdo->prepare($sql);

    $executeQuery = $stmt->execute([$employee_id]);

    if ($executeQuery) {
        return true;
    }
}
?> 