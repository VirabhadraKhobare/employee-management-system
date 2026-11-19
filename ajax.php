<?php 

include 'db.php';

// Get the action from AJAX
$action = $_POST['action'] ?? '';

// ADD EMPLOYEE
if($action == "add"){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $department = $_POST['department'];
    $salary = $_POST['salary'];
    $joining_date = $_POST['joining_date'];
    $status = $_POST['status'];


    if(empty($name) || empty($email) || empty($mobile) || empty($department) || empty($salary) || empty($joining_date) || empty($status)){
        echo ("Please fill all fields.");
        exit;
    }

    $query = "INSERT INTO employees(name, email, mobile, department, salary, joining_date, status) 
    VALUES ('$name', '$email', '$mobile', '$department', '$salary', '$joining_date', '$status')";

    if(mysqli_query($conn, $query)){
        echo ("Employee added successfully.");
    } else {
        echo ("Error adding employee.");
    }
    exit;
}

// GET EMPLOYEES
if($action == "list"){
    $query = "SELECT * FROM employees ORDER BY id DESC";
    $result = mysqli_query($conn, $query);
    $employees = [];

    while($row = mysqli_fetch_assoc($result)){
        $employees[] = $row;
    }
    echo json_encode($employees);
    exit;
}

// GET SINGLE EMPLOYEE
if($action == "get"){
    $id = $_POST['id'];
    $query = "SELECT * FROM employees WHERE id='$id'";
    $result = mysqli_query($conn, $query);
    $employee = mysqli_fetch_assoc($result);
    echo json_encode($employee);
    exit;
}

// UPDATE EMPLOYEE
if($action == "update"){
    $id = $_POST['id'];

    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $department = $_POST['department'];
    $salary = $_POST['salary'];
    $joining_date = $_POST['joining_date'];
    $status = $_POST['status'];

    $query = "UPDATE employees SET
            name='$name',
            email='$email',
            mobile='$mobile',
            department='$department',
            salary='$salary',
            joining_date='$joining_date',
            status='$status'

            WHERE id='$id'";

    if (mysqli_query($conn, $query)) {
        echo "Employee updated successfully.";
    } else {
        echo "Error updating employee.";
    }
    exit;

}

// DELETE EMPLOYEE
if ($action == "delete") {
    $id = $_POST['id'];
    $query = "DELETE FROM employees WHERE id='$id'";

    if (mysqli_query($conn, $query)) {
        echo "Employee deleted successfully.";
    } else {
        echo "Error deleting employee.";
    }
    exit;
}
?>