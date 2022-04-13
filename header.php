<header>

    <video autoplay muted loop id="myVideo">
        <source src="/img/header-back-2.mp4" type="video/mp4">
    </video>
    <div id="nav-con" class="text-center">
        
            <button type="button"  id="nav-btn" class="btn btn-primary"><a href="index.php">HOME</a></button>
        
        
            <button type="button"  id="nav-btn" class="btn btn-primary"><a href="question1.php">START QUIZ</a></button>
        
        
            <button type="button"  id="nav-btn" class="btn btn-primary"><a href="about.php">ABOUT</a></button>
        
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

<?php echo '<h1 class="mb-3 text-center color-texto">' . $firstQuestion['Text'] . '</h1>' ?>