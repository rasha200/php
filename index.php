<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>taske_manager</title>
</head>
<body>
<h1>Task Manager</h1>

    <h2>Create Task</h2>
    <form action="conction.php" method="post">
        <label for="task_name">Task Name:</label>
        <input type="text" id="task_name" name="task_name" required>
        <br>
        <label for="task_description">Task Description:</label>
        <textarea id="task_description" name="task_description"></textarea>
        <br>
        <label for="status">Status:</label>
        <input type="text" id="status" name="status" required>
        <br>
        <input type="submit" value="Create Task">
    </form>    
</body>
</html>