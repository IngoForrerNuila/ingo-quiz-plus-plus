<?php
session_start();
?>
<?php

echo '<pre>';
print_r($_POST);
echo '</pre>';

      $_SESSION['question1']=$_POST['question1'];

    // JUST TO TEST IF IT WAS TAKING THE INFO  echo "This is the answer : 
    //echo $_SESSION['question1']."this is value of SESSION [question1]";


    if(isset($_POST['submit'])){

    $question2=$_POST['question2'];

    $_SESSION['question2']=$question2;


    }
?>

<body>
    <main>
        
        <?php include("header.php");

        print '<pre>';
        print_r($answerFour);
        print '</pre>';


        echo $_SESSION['question1'];

        ?>


        <h1 class="text-center">QUESTION 2</h1>

        <?php echo '<h1 class="mb-3 text-center">' . $secondQuestion['Text'] . '</h1>' ?>

        <form action="question3.php" name="" method="post">
            <div class="row justify-content-md-center text-center">
                <input type="radio" name="user_level" id="rd1" value="0" />
                <label for="rd1"><?php echo '<h3 class="mb-3 text-center">' . $answerFour['Text'] . '</h3>' ?>
                </label>
            </div>

            <div class="row justify-content-md-center text-center">
                <input type="radio" name="user_level" id="rd1" value="1" />
                <label for="rd1"> <?php echo '<h3 class="mb-3 text-center">' . $answerFive['Text'] . '</h3>' ?>
                </label>
            </div>
        </form>


        <img id="global-pages-img" class="responsive" src="/img/polar-bears.jpg">

        <div id="nav-con" class="text-center">

            <button type="submit" id="nav-btn" class="btn btn-primary"><a href="question3.php" class="text-decoration-none">ANSWER</a></button>

        </div>


        <?php include("footer.php"); ?>
    </main>



</body>

</html>