<?php
require_once 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
    $id = $_GET["id"];
    $sql = "SELECT * FROM tasks WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $task = $row["task"];
    } else {
        echo "Task not found";
    }
} else {
    echo "Invalid request";
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Task</title>
</head>
<body>
    <h1>Edit Task</h1>
    <form action="update-to-do.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <input type="text" name="task" value="<?php echo $task; ?>">      
        <button type="submit">Update Task</button>
    </form>
</body>
</html>

