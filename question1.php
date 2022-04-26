<?php
session_start();
if (isset($_POST['submit'])) {

    $question1 = $_POST['question1'];

    $_SESSION['question1'] = $question1;
}
?>

<body>
    <main>
        <?php include("header.php");
        print '<pre>';
        print_r($answerOne);
        print '</pre>';

        ?>

        <h1 class="text-center">QUESTION 1</h1>

        <?php echo '<h1 class="mb-3 text-center">' . $firstQuestion['Text'] . '</h1>' ?>


        <form action="question2.php" name="" method="post">
            <div class="row justify-content-md-center text-center">
                <input type="radio" name="question1" id="rd1" value="1" />
                <label for="rd1"><?php echo '<h3 class="mb-3 text-center">' . $answerOne['Text'] . '</h3>' ?>
                </label>
            </div>

            <div class="row justify-content-md-center text-center">
                <input type="radio" name="question1" id="rd1" value="0" />
                <label for="rd1"> <?php echo '<h3 class="mb-3 text-center">' . $answerTwo['Text'] . '</h3>' ?>
                </label>
            </div>

            <div class="row justify-content-md-center text-center">
                <input type="radio" name="question1" id="rd1" value="0" />
                <label for="rd1"> <?php echo '<h3 class="mb-3 text-center">' . $answerThree['Text'] . '</h3>' ?>
                </label>
            </div>



            <img id="global-pages-img" class="responsive" src="/img/camels.jpg">

            <div id="nav-con" class="text-center">

                <button type="submit" id="nav-btn" class="btn btn-primary"><a href="question2.php" class="text-decoration-none">ANSWER</a></button>

            </div>
        </form>

        <?php include("footer.php"); ?>
    </main>



</body>

</html>