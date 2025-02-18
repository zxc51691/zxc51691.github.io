<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
        $email = $_POST["email"];

        echo "Hello, " . $name . "!<br>";
        echo "Your email adress is: " . $email . "<br>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Form Example</title>
</head>
<body>
    <h1>Submit Your Information</h1>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" required><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>