<?php
    require __DIR__ . '/./functions.php';
    $carachterPsw = [
            'a',
            'b',
            'c',
            'D',
            'E',
            'f',
            0,
            1,
            2,
            3,
            4,
            5,
            6,
            7,
            8,
            9,
            '!',
            '?',
            '&',
            '%',
            '$',
            '<',
            '>',
            '^',
            '+',
            '-',
            '*',
            '/',
            '(',
            ')',
            '[',
            ']',
            '{',
            '}',
            '@',
            '#',
            '_',
            '='
        
    ];

    if(!empty($_GET['nCharactersPsw'])) {
        // se il get contiene qualcosa inizia la sessione
        session_start();
        // inizializzo la variabile della sessione
        $_SESSION['nCharacters'] = generatePsw($carachterPsw);
        // creo il redirect verso la landing-page
        header('Location: ./landing-page.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous'/>
    <title>PHP Strong Password Generator</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col my-5">
            <form action="./index.php" method="GET">
                <label class="form-label" for="inputNPsw">Inserisci il numero di caratteri della tua password</label> 
                <input class="form-control w-25"  type="number" placeholder="Inserisci il numero di caratteri" name="nCharactersPsw" id="inputNPsw">
                <button type="submit" class="btn btn-primary my-5">Genera</button>
            </form>
        </div>
        <?php 
        if(isset($_GET['nCharactersPsw'])) :
        ?>
            <h5 class="text-danger">
                INSERIRE UN VALORE PER POTER GENERARE LA PASSWORD
            </h5>
        <?php 
        endif;
        ?>
    </div>
</div>
</body>
</html>