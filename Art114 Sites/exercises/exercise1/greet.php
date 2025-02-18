<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    echo "Hello, $name!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Greeting</title>
</head>
<body>
    <h1>Enter your name:</h1>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];
    ?>">
        <input type="text" name="name" required>    
        <input type="submit" value="Submit">
</form>
</body>
</html>