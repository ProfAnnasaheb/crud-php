<?php
include "dbconfig.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Database</title>
</head>
<body>
    <div class="container">
        <h2>Student Details</h2>
        <table border="1px">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
            <?php
            $sql = "SELECT * FROM students";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
            ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['age']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td>
                            <a href="update-student.php?id=<?php echo $row['id']; ?>">Edit</a>
                            <a href="delete-student.php?id=<?php echo $row['id']; ?>">Delete</a>
                        </td>
                    </tr>
            <?php
                }
            }
            ?>
        </table>
    </div>
</body>
</html>
