<?php
session_start();

?>
<?php

$_SESSION['question3'] = $_POST['question3'];

?>



<body>
    <main>
        <?php include("header.php");

        echo $_SESSION['question1'] . "Question1" . '<br>';
        echo $_SESSION['question2'] . "Question2" . '<br>';
        echo $_SESSION['question3'] . "Question3" . '<br>';

        $result = $_SESSION['question1'] + $_SESSION['question2'] + $_SESSION['question3'];
        echo $result;
    
        ?>

      
        <?php
        if ($result == 3) {
            echo "<h1 class='text-center'>You did it well >:) all the answers are correct</h1>";
        } elseif ($result == 2) {
            echo "<h1 class='text-center'>So you just failed one question :) congratulations</h1>";
        } elseif ($result == 1) {
            echo "<h1 class='text-center'>Mmmhh... you failed two questions :/ try again please</h1>";
        } elseif ($result == 0) {
            echo "<h1 class='text-center'>Unfortunately you FAILED >:( Do it again!!! </h1>";
        }
        ?>



        <h3 class="text-center">Ok, you finished the quiz, you can go, goodbye >:( </h3>

       


        

        <button type="button" class="start-quiz-btn"><a href="index.php">FINISH</a></button>


        <img id="global-pages-img" class="responsive" src="/img/Hippo.jpg">


        <?php include("footer.php"); ?>
    </main>



</body>

</html>