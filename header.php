<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WORLD WIDE ANIMALS</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
</head>

<header>

    <video autoplay muted loop id="myVideo">
        <source src="/img/header-back-2.mp4" type="video/mp4">
    </video>
    <div id="nav-con" class="text-center">
        
            <button type="button"  id="nav-btn" class="btn btn-primary"><a href="index.php" class="text-decoration-none">HOME</a></button>
        
        
            <button type="button"  id="nav-btn" class="btn btn-primary"><a href="question1.php" class="text-decoration-none">START QUIZ</a></button>
        
        
            <button type="button"  id="nav-btn" class="btn btn-primary"><a href="about.php" class="text-decoration-none">ABOUT</a></button>
        
    </div>

</header>

<!--Conection with database-->

<?php 
$dbHOST= getenv('DB_HOST');
$dbName= getenv('DB_NAME');
$dbUser= getenv('DB_USER');
$dbPassword= getenv('DB_PASSWORD');

$dbConnection = new PDO ("mysql:host=$dbHOST;dbname=$dbName;charset=utf8",$dbUser,$dbPassword);


//Preguntas
$query=$dbConnection->query("SELECT ID, Text FROM Preguntas");
$Preguntas=$query->fetchAll(PDO::FETCH_ASSOC);

$firstQuestion = $Preguntas[0];
$secondQuestion= $Preguntas[1];
$thirdQuestion= $Preguntas[2];
?>

