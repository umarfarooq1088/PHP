<?php
class ToDoForm {
    public function renderForm() {
        echo '<form action="create-to-do.php" method="post">
                  <input type="text" name="task" placeholder="Enter Something...">
                  <button type="submit">Add</button>
              </form>';
    }
}

$toDoForm = new ToDoForm();
?>
