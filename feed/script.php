<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["image"]))
{
    ob_start();
    header("Content-Type: image/jpg");

    // $input = fopen("/tmp/input", "w");
    // fwrite($input, file_get_contents(STDIN));

    $command = "php image_rotate.php";
    exec($command, $output, $return_var);

    $handle = fopen('rotated_image.jpg', "r");
    while (($line = fgets($handle)) != false)
        echo $line;
    ob_end_flush();
    exit();
    // unlink('rotated_image.jpg');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Image Retate</title>
</head>
<body>
    <h2>Upload Image</h2>
    <form action="script.php" method="post" enctype="multipart/form-data">
        <input type="file" name="image">
        <input type="submit" value="Upload">
    </form>
</body>
</html>
