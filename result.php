session_start();

/* PLEASE CHANGE 3 WITH THE NUMBER OF THE CORRECT ANSWER OF THE QUESTION BEFORE*/
if ($_POST["answer"] == 1) { // TODO
$_SESSION["score"] += 1;
}
?>

<body>
    <main>
        <?php include("header.php");


        ?>

        <h1 class="text-center">RESULT</h1>
        <h3 class="text-center">Ok, looks like you have finished the quiz, now you can go, goodbye >:( </h3>

        <div class="title-rp">
            SUMMARY
        </div>

        <div class="score-rp">
            YOUR SCORE IS <?php echo $_SESSION["score"]; ?>/3 POINTS!
        </div>



        <a class="answer-button" href="question1.php">PLAY AGAIN</a>
            



        <img id="global-pages-img" class="responsive" src="/img/Hippo.jpg">

        <button type="button" class="start-quiz-btn"><a href="index.php">FINISH</a></button>


        <?php include("footer.php"); ?>
    </main>



</body>

</html>