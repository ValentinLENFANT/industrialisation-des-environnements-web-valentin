<?php

//The string to hash
$stringToHash = "Bonjour, monde!";
//The choosen complexity
$complexity = "0000";
//The number of iteration to find the solution
$iteration = 0;
//The beginning of the script
$startTime = microtime(true);

//We do a binary comparison of the X first numbers of the hash to the complexity
while(strcmp(substr(hash('sha256', $stringToHash."$iteration"),0,4), $complexity))
{
    $iteration++;
}
//The end of the script
$endTime = microtime(true);
//A simple substraction to find the time taken by the script
$time = $endTime - $startTime;

//Display the information
echo "Résultat trouvé ! Après " .$time. " secondes et " .$iteration. " itérations, le résultat du hash est le suivant : " .hash('sha256', $stringToHash."$iteration") . "<br>"; // WPCS: XSS OK