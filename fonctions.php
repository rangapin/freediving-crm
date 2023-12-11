<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$database = "freediving-crm";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Function to create a new student record
function createStudent($name, $email, $emergencyContact, $medicalInfo, $courseProgress) {
    global $conn;

    $sql = "INSERT INTO students (name, email, emergency_contact, medical_info, course_progress)
            VALUES ('$name', '$email', '$emergencyContact', '$medicalInfo', '$courseProgress')";

    if (mysqli_query($conn, $sql)) {
        return "Student record created successfully";
    } else {
        return "Error creating student record: " . mysqli_error($conn);
    }
}

// Function to read student records
function readStudents() {
    global $conn;

    $sql = "SELECT * FROM students";
    $result = mysqli_query($conn, $sql);

    $students = array();

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $students[] = $row;
        }
    }

    return $students;
}

// Function to update a student record
function updateStudent($id, $name, $email, $emergencyContact, $medicalInfo, $courseProgress) {
    global $conn;

    $sql = "UPDATE students
            SET name='$name', email='$email', emergency_contact='$emergencyContact', 
                medical_info='$medicalInfo', course_progress='$courseProgress'
            WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
        return "Student record updated successfully";
    } else {
        return "Error updating student record: " . mysqli_error($conn);
    }
}

// Function to delete a student record
function deleteStudent($id) {
    global $conn;

    $sql = "DELETE FROM students WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
        return "Student record deleted successfully";
    } else {
        return "Error deleting student record: " . mysqli_error($conn);
    }
}

// Close connection
mysqli_close($conn);
?>

