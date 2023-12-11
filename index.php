<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Freediving School CRM</title>
    <!-- Add Bootstrap CSS link -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2 class="mb-4">Freediving School CRM</h2>

    <!-- Create Student Form -->
    <form action="process_student.php" method="post">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="emergencyContact">Emergency Contact:</label>
            <input type="text" class="form-control" id="emergencyContact" name="emergencyContact" required>
        </div>

        <div class="form-group">
            <label for="medicalInfo">Medical Information:</label>
            <textarea class="form-control" id="medicalInfo" name="medicalInfo" rows="3" required></textarea>
        </div>

        <div class="form-group">
            <label for="courseProgress">Course Progress:</label>
            <input type="text" class="form-control" id="courseProgress" name="courseProgress" required>
        </div>

        <button type="submit" class="btn btn-primary">Create Student</button>
    </form>

    <hr>

    <!-- Display Student Records -->
    <h3>Student Records</h3>
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Emergency Contact</th>
            <th>Medical Information</th>
            <th>Course Progress</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
        // Fetch and display student records from the database here
        ?>
        </tbody>
    </table>
</div>

<!-- Add Bootstrap JS and jQuery scripts -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
