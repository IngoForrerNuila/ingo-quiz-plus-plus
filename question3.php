<?php
session_start();

?>

<?php

$_SESSION['question2'] = $_POST['question2'];

// JUST TO TEST IF IT WAS TAKING THE INFO  echo "This is the answer : 
//echo $_SESSION['question1']."this is value of SESSION [question1]";


if (isset($_POST['submit'])) {

    $question3 = $_POST['question3'];

    $_SESSION['question3'] = $question3;
}

    
?>

<body>
    <main>
        <?php include("header.php"); ?>

        <h1 class="text-center">QUESTION 3</h1>

        <?php echo '<h1 class="mb-3 text-center">' . $thirdQuestion['Text'] . '</h1>' ?>

        <form action="result.php" name="" method="post">

            <div class="row justify-content-md-center text-center">
                <input type="radio" name="question3" id="rd1" value="1" />
                <label for="rd1"><?php echo '<h3 class="mb-3 text-center">' . $answerSix['Text'] . '</h3>' ?>
                </label>
            </div>

            <div class="row justify-content-md-center text-center">
                <input type="radio" name="question3" id="rd1" value="0" />
                <label for="rd1"> <?php echo '<h3 class="mb-3 text-center">' . $answerSeven['Text'] . '</h3>' ?>
                </label>
            </div>

            <div class="row justify-content-md-center text-center">
                <input type="radio" name="question3" id="rd1" value="1" />
                <label for="rd1"> <?php echo '<h3 class="mb-3 text-center">' . $answerEight['Text'] . '</h3>' ?>
                </label>
            </div>

            <div class="row justify-content-md-center text-center">
                <input type="radio" name="question3" id="rd1" value="1" />
                <label for="rd1"> <?php echo '<h3 class="mb-3 text-center">' . $answerNine['Text'] . '</h3>' ?>
                </label>
            </div>

            <div class="row justify-content-md-center text-center">
                <input type="radio" name="question3" id="rd1" value="1" />
                <label for="rd1"> <?php echo '<h3 class="mb-3 text-center">' . $answerTen['Text'] . '</h3>' ?>
                </label>
            </div>



            <div id="nav-con" class="text-center">

                <button type="submit" id="nav-btn" class="btn btn-primary" class="text-decoration-none">ANSWER</button>

            </div>

            <img id="global-pages-img" class="responsive" src="/img/cow-mammals.jpg">

        </form>

        <?php include("footer.php"); ?>
    </main>



</body>

</html>