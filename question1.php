<body>
    <main>
        <?php include("header.php");
        print'<pre>';
        print_r($Preguntas);
        print'</pre>';

        ?>

        <h1 class="text-center">QUESTION 1</h1>
        
        <?php echo '<h1 class="mb-3 text-center">' . $firstQuestion['Text'] . '</h1>' ?>

        
        <img id="global-pages-img" class="responsive" src="/img/camels.jpg">

        <div id="nav-con" class="text-center">
        
            <button type="button"  id="nav-btn" class="btn btn-primary"><a href="question2.php" class="text-decoration-none">ANSWER</a></button>
                        
        </div>


        <?php include("footer.php");?>
    </main>



</body>

</html>