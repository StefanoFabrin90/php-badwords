<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Descrizione:
    Creare una variabile con un paragrafo di testo a vostra scelta. Stampare a schermo il paragrafo e la sua lunghezza. Una parola da censurare viene passata dall'utente tramite parametro GET. Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->
    
    <?php 

    $text = 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. In nihil necessitatibus aut doloribus aliquam totam laborum. Porro vel, minus molestiae qui officiis, quis aspernatur sint quos tenetur recusandae enim tempore!Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quia, repudiandae minus rem quas qui itaque? Nam veritatis nisi, ea libero omnis iure excepturi neque, modi tenetur asperiores odit corrupti quia!
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis doloribus placeat dolores, nam, eveniet voluptatum facilis assumenda consectetur culpa inventore eligendi ab voluptates laboriosam voluptas vel in illo vitae impedit!';
    echo 'FRASE COMPLETA:'.'<br><br>';
    echo $text .'<br><br>';
    echo 'Lunghezza del testo:';
    echo strlen($text);

    $word = $_GET['***'];

    ?>
</body>
</html>