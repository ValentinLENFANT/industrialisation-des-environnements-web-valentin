<h1>Hash by yourself</h1>
<p>You can go back to the homepage by clicking <a href="index.php">here</a></p>

<?php

/**
 * Created by PhpStorm.
 * User: Valentin
 * Date: 07/03/2018
 * Time: 11:46
 */

if(isset($_POST['stringToHash']) && isset($_POST['complexity']))
{
    $stringToHash = $_POST['stringToHash'];
    $complexity = "";
    $iteration = 0;

    for($i=0; $i<$_POST['complexity'];$i++)
    {
        $complexity .= "0";
    }

    $startTime = microtime(true);
    while(strcmp(substr(hash('sha256', $stringToHash."$iteration"),0,$_POST['complexity']), $complexity))
    {
        $iteration++;
    }
    $endTime = microtime(true);
    $time = $endTime - $startTime;

    echo "Résultat trouvé ! Après " .$time. " secondes et " .$iteration. " itérations, le résultat du hash est le suivant : " .hash('sha256', $stringToHash."$iteration") . "<br>"; //
}
else {
    echo "Veuillez rentrer les valeurs ci-dessous";
}

?>

<form action="hash_by_yourself.php" method="post">
    String to hash : <br>
    <input type="text" name="stringToHash"><br>
    Complexity : <br>
    <input type="text" name="complexity"><br><br>
    <input type="submit" value="Hash">
</form>
