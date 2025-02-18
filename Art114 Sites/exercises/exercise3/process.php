<?php
// Check if thr form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $age = $_POST["age"];
    $email = $_POST["email"];
    
    // Display results
    echo "<h2>Form Results:</h2>";
    echo "<p>Name: <a href='mailto:$email'>$name</a></p>";
    echo "<p>Age: $age</p>";
    
    // Link to get back to the form
    echo "<p><a href='form.html'>Back to Form</a></p>";
} else {
    
    header("Location: form.html");
    exit();
}
?>