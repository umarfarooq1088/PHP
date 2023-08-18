<?php
var_dump($_POST);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once 'database.php';

    $task = $_POST["task"];
 

    $sql = "INSERT INTO tasks (task) VALUES ('$task')";

    if ($conn->query($sql) === TRUE) {
        echo "Task created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->errno;
    }

    $conn->close();
}
?>
