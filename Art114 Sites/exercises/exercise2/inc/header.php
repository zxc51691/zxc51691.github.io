<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title><?php echo $title;?> | My Website</title>
</head>
<body>
   <main>
    <nav>
    <ul>
        <li><a href="<?php echo $basePath;?>index.php">Home</a></li>
        <li><a href="<?php echo $basePath;?>about.php">About</a></li>
        <li><a href="<?php echo $basePath;?>contact.php">Contact</a></li>
    </ul>
    </nav> 
    <hr />
    <h1><?php echo $title;?></h1>