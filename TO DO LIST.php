<?php
// Start the session
session_start();

// Initialize the to-do list if not already set
if (!isset($_SESSION['todolist'])) {
    $_SESSION['todolist'] = [];
}

// Handle form submission for adding a new item
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['add'])) {
        // Sanitize the new item
        $newItem = htmlspecialchars(trim($_POST['item']), ENT_QUOTES, 'UTF-8');
        
        if (!empty($newItem)) {
            // Add the new item to the list
            $_SESSION['todolist'][] = $newItem;
        }
    }

    if (isset($_POST['delete'])) {
        // Handle deletion
        $indexToDelete = (int)$_POST['delete'];
        if (isset($_SESSION['todolist'][$indexToDelete])) {
            unset($_SESSION['todolist'][$indexToDelete]);
            $_SESSION['todolist'] = array_values($_SESSION['todolist']); // Reindex array
        }
    }

    // Redirect to prevent form resubmission on page refresh
    header("Location: todolist.php");
    exit();
}

// Retrieve session data
$todolist = $_SESSION['todolist'];

// If any messages or errors need to be handled, do so here
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
</head>
<body>
    <h2>To-Do List</h2>

    <form action="todolist.php" method="post">
        <label for="item">Add New Item:</label>
        <input type="text" id="item" name="item" required>
        <input type="submit" name="add" value="Add Item">
    </form>

    <h3>Current To-Do List:</h3>
    <ul>
        <?php foreach ($todolist as $index => $item): ?>
            <li>
                <?php echo htmlspecialchars($item); ?>
                <form action="todolist.php" method="post" style="display:inline;">
                    <input type="hidden" name="delete" value="<?php echo $index; ?>">
                    <input type="submit" value="Delete">
                </form>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
