<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">


    
</head>
<body>
    <?php
    echo '<nav>';
        echo '<input type="checkbox" id="check">';
       echo '<label for="check" class="checkbtn"> </label>';
            echo '<i class="fas fa-bars"></i>';       
        echo '<label class="logo">Home Services</label>';
        echo '<ul>
            <li><a href="home.php" class="active">Home</a></li>
            <li><a href="aboutus.php">About us</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="contact">Contact us</a></li>

        </ul>';
    echo "</nav>";
    ?>
    
</body>
</html>