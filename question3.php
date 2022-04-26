<?php
session_start();

/* PLEASE CHANGE 3 WITH THE NUMBER OF THE CORRECT ANSWER OF THE QUESTION BEFORE*/
if ($_POST["answer"] == 1) {
    $_SESSION["score"] += 1;
}
?>

<body>
    <main>
        <?php include("header.php"); ?>

        <h1 class="text-center">QUESTION 3</h1>

        <?php echo '<h1 class="mb-3 text-center">' . $thirdQuestion['Text'] . '</h1>' ?>

        <form class="form" action="result.php" method="post">

            <div class="row justify-content-md-center text-center">
                <input type="radio" name="user_level" id="rd1" value="1" />
                <label for="rd1"><?php echo '<h3 class="mb-3 text-center">' . $answerSix['Text'] . '</h3>' ?>
                </label>
            </div>

            <div class="row justify-content-md-center text-center">
                <input type="radio" name="user_level" id="rd1" value="0" />
                <label for="rd1"> <?php echo '<h3 class="mb-3 text-center">' . $answerSeven['Text'] . '</h3>' ?>
                </label>
            </div>

            <div class="row justify-content-md-center text-center">
                <input type="radio" name="user_level" id="rd1" value="1" />
                <label for="rd1"> <?php echo '<h3 class="mb-3 text-center">' . $answerEight['Text'] . '</h3>' ?>
                </label>
            </div>

            <div class="row justify-content-md-center text-center">
                <input type="radio" name="user_level" id="rd1" value="1" />
                <label for="rd1"> <?php echo '<h3 class="mb-3 text-center">' . $answerNine['Text'] . '</h3>' ?>
                </label>
            </div>

            <div class="row justify-content-md-center text-center">
                <input type="radio" name="user_level" id="rd1" value="1" />
                <label for="rd1"> <?php echo '<h3 class="mb-3 text-center">' . $answerTen['Text'] . '</h3>' ?>
                </label>
            </div>

            <img id="global-pages-img" class="responsive" src="/img/cow-mammals.jpg">

            <div id="nav-con" class="text-center">

                <button type="submit" id="nav-btn" class="btn btn-primary"><a href="result.php" class="text-decoration-none">ANSWER</a></button>

            </div>


            <?php include("footer.php"); ?>
    </main>



</body>

</html>