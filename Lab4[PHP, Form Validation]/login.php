<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $remember = isset($_POST["remember"]) ? "Yes" : "No";

    if (preg_match("/^[a-zA-Z0-9._-]{2,}$/", $username) && strlen($password) >= 8 && preg_match("/[@#$%]/", $password)) {
        // Valid username and password
        echo "Username: $username<br>";
        echo "Password: $password<br>";
        echo "Remember me: $remember";
    } else {
        // Validation failed
        echo "Invalid username or password. Please check your inputs.";
    }
}
?>
