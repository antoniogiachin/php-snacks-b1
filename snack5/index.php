<?php

    /* 
        Prendere un testo abbastanza lungo, contenente diverse frasi. 
        Prendere il testo e suddividerlo in tanti paragrafi ogni volta in cui si incontrerà un punto.
    */

    // paragrafo originale
    $paragrafo = " Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Adipiscing bibendum est ultricies integer quis auctor elit sed vulputate. Mauris in aliquam sem fringilla. Ac tortor vitae purus faucibus ornare suspendisse sed. Convallis posuere morbi leo urna molestie at elementum. Velit aliquet sagittis id consectetur. Sodales neque sodales ut etiam sit amet nisl purus in. In iaculis nunc sed augue. Ut eu sem integer vitae justo eget magna fermentum iaculis. Pellentesque habitant morbi tristique senectus et. Ultrices neque ornare aenean euismod. Hac habitasse platea dictumst quisque sagittis purus sit amet. Facilisis leo vel fringilla est ullamcorper eget nulla facilisi.";

    // trasformo stringa in array, ogni elemento si forma all'occorrenza del punto
    $paragrafoSuddiviso = explode('.', $paragrafo);
    // echo "<pre>";
    // var_dump($paragrafoSuddiviso);
    // echo "</pre>";

    //variabile vuota testo diviso
    $testoDiviso='';

    // ciclo array con paragrafi
    for ($i=0; $i < count($paragrafoSuddiviso) -1 ; $i++) { 
        $testoDiviso .= "<p>  $paragrafoSuddiviso[$i]. </p> ";
    }
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <h1>Testo Originale</h1>

    <p><?php echo $paragrafo?></p>

    <h1>Testo suddiviso</h1>

    <div> <?php echo $testoDiviso?></div>

</body>
</html>