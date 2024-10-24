<!DOCTYPE html>
<html>
<head>
    <title>Account Deletion Confirmation</title>
</head>
<body>
    <h3 style="background-color:#F5B7B1; text-align:center;">WD Practical Exam 12/04/2024</h3>

    <?php
    // Get the account number from the form submission
    $account_number = $_GET['account_number'];

    // Include the database connection file
    require_once 'login.php'; // This file contains database connection details

    // Check if connection was successful
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL to delete from Contact_details and Customers
    $sql1 = "DELETE FROM Contact_details WHERE AccountNo = '$account_number';";
    $sql2 = "DELETE FROM Customers WHERE AccountNo = '$account_number';";

    // Execute the first query to delete from Contact_details
    if ($conn->query($sql1) === TRUE) {
        echo "Contact details deleted successfully for account number: " . $account_number . "<br>";
    } else {
        echo "Error deleting contact details: " . $conn->error . "<br>";
    }

    // Execute the second query to delete from Customers
    if ($conn->query($sql2) === TRUE) {
        echo "Account deleted successfully for account number: " . $account_number . "<br>";
    } else {
        echo "Error deleting account: " . $conn->error . "<br>";
    }

    // Close the database connection
    $conn->close();
    ?>

    <a href="index.html"><p>Home</p></a>
</body>
</html>
