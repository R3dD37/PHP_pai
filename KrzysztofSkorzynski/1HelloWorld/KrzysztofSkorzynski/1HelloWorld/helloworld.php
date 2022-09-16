<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nazwa = "Hello World"; #zmienna
    print("$nazwa taka"); #wyświetlanie zamiennie echo('Tekst');
    $cos = "a tak jakis";
    echo($nazwa." ".$cos);
    /*
        Komentarze dokładnie takie jak w js
    */

    define("CONSTANT", "STAŁA"); #deklaracja stałej
    echo(CONSTANT);

    if ($nazwa == CONSTANT) {
        print("Warunek prawdziwy");
    }
    else {
        print("Warunek nieprawdziwy");
    }
    
    ?>
</body>
</html>