<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $current_password = $_POST["current_password"];
    $new_password = $_POST["new_password"];
    $retype_password = $_POST["retype_password"];

    if ($new_password === $current_password) {
        echo "New password cannot be the same as the current password.";
    } elseif ($new_password !== $retype_password) {
        echo "New password and retype password do not match.";
    } else {
       
        echo "Password changed successfully!";
    }
}
?>
