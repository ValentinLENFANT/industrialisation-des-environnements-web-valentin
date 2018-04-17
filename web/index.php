<body align="center">

<div id="main" style="border-style:double;">
    
    <h1>A simple page for my project</h1>
    <h2>Deployed thanks to Heroku and checked by Travis</h2>
    <h3>Also Codacy is looking at the files!</h3>

    <?php

    echo "Welcome on this example project for my thesis. <br> This is a simple homepage with some links. Nothing special.";

    for ($i = 0; $i < 5; $i++) {
        echo "J'affiche " . $i . "<br>";
    }

    ?>

    <p><a>You can click <a href="hash.php"> here</a> to try the hash example.</p>
    <p>You can also hash a string with your <strong>own parameter</strong> by clicking <a href="hash_by_yourself.php">here</a>
    </p>
    <p>Or you can follow this <a href="automaticDrawing.html">link</a> and see the result ;)</p>

</div>

</body>