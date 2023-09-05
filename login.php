<?php
// A dictionary to store valid usernames and passwords (insecure for demonstration purposes)
$user_credentials = [
    "8788652756" => "password123",
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Check if the provided username exists in the credentials and the password matches
    if (isset($user_credentials[$username]) && $user_credentials[$username] == $password) {
        // Authentication successful, redirect to the customer list page or any desired page
        header("Location: customer_list.php");
        exit();
    } else {
        // Authentication failed, show an error message
        $error_message = "Invalid username or password. Please try again.";
    }
}
?>
