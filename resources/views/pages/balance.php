
<?php
// Connect to database
$servername = "localhost";
$username = "root";
$password = 
$dbname = "afcs";
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form has been submitted
if (isset($_POST['submit'])) {
    // Get selected item and price from database
    $item = $_POST['item'];
    $sql = "SELECT price FROM items WHERE name = '$item'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $price = $row['price'];

    // Deduct price from user's account
    $user_id = $_SESSION['user_id']; // assuming user is logged in
    $sql = "UPDATE users SET account_balance = account_balance - $price WHERE id = $user_id";
    if ($conn->query($sql) === TRUE) {
        echo "Purchase successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close database connection
$conn->close();
?>

<!-- Display form with dropdown list and purchase button -->
<form method="post">
    <label for="item">Select item:</label>
    <select id="item" name="item">
        <option value="item1">Item 1</option>
        <option value="item2">Item 2</option>
        <option value="item3">Item 3</option>
    </select>
    <br>
    <button type="submit" name="submit">Purchase</button>
</form>
