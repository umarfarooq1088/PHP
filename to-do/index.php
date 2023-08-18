<?php
require_once 'to-do-form.php';  // Include the to-do-form.php file

require_once 'database.php';

$sql = "SELECT * FROM tasks";
$result = $conn->query($sql);

$tasks = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $tasks[] = $row;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>TODO List</title>
</head>
<body>
    <h1>PHP TODO List</h1>

    <h2>Add Task</h2>
    <?php $toDoForm->renderForm(); ?>  <!-- Use the defined $toDoForm variable -->
    <ul>
        <?php foreach ($tasks as $task) : ?>
            <li>
                <?php echo $task["task"];  ?>
                <a href="edit-to-do.php?id=<?php echo $task["id"]; ?>">Edit</a>
                <a href="delete-to-do.php?id=<?php echo $task["id"]; ?>">Delete</a>
            </li>
        <?php endforeach; ?>
    </ul>

   
</body>
</html>
