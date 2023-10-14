<!DOCTYPE html>
<html>
<head>
    <title>Profile Picture</title>
</head>
<body>
    <form method="post" action="process_profile_picture.php" enctype="multipart/form-data">
        <fieldset>
            <legend>Profile Picture</legend>
            <input type="file" id="picture" name="picture" accept=".jpeg, .jpg, .png" required>
            <br><br>
            <input type="submit" value="Submit">
        </fieldset>
    </form>
	
	<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $allowed_formats = ['image/jpeg', 'image/jpg', 'image/png'];
    $max_size = 4 * 1024 * 1024; // 4MB

    if (isset($_FILES['picture']) && $_FILES['picture']['error'] === 0) {
        $file = $_FILES['picture'];

        if (in_array($file['type'], $allowed_formats) && $file['size'] <= $max_size) {
            
            move_uploaded_file($file['tmp_name'], 'uploads/' . $file['name']);
            echo "Picture uploaded successfully!";
        } else {
            echo "Invalid file format or size. Please choose a JPEG, JPG, or PNG file less than 4MB.";
        }
    } else {
        echo "An error occurred while uploading the file.";
    }
}
?>

</body>
</html>
