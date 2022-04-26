<?php
session_start();
$_SESSION["score"] = 0;
?>

<body>
    <main>
        <?php include("header.php");
        print'<pre>';
        print_r($answerOne);
        print'</pre>';

        ?>

        <h1 class="text-center">QUESTION 1</h1>

        <?php echo '<h1 class="mb-3 text-center">' . $firstQuestion['Text'] . '</h1>' ?>

   
        
            <div class="row justify-content-md-center text-center">
                <input type="radio" name="user_level" id="rd1" value="1" />
                <label for="rd1"><?php echo '<h3 class="mb-3 text-center">' . $answerOne['Text'] . '</h3>' ?>
                </label>
            </div>

            <div class="row justify-content-md-center text-center">
                <input type="radio" name="user_level" id="rd1" value="0" />
                <label for="rd1"> <?php echo '<h3 class="mb-3 text-center">' . $answerTwo['Text'] . '</h3>' ?>
                </label>
            </div>

            <div class="row justify-content-md-center text-center">
                <input type="radio" name="user_level" id="rd1" value="0" />
                <label for="rd1"> <?php echo '<h3 class="mb-3 text-center">' . $answerThree['Text'] . '</h3>' ?>
                </label>
            </div>



            <img id="global-pages-img" class="responsive" src="/img/camels.jpg">

            <div id="nav-con" class="text-center">

                <button type="submit" id="nav-btn" class="btn btn-primary"><a href="question2.php" class="text-decoration-none">ANSWER</a></button>

            </div>
       

        <?php include("footer.php"); ?>
    </main>



</body>

</html>