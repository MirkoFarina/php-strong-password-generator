<?php
require __DIR__ . '/./functions.php';
    $characterNumbers = [
        0,
        1,
        2,
        3,
        4,
        5,
        6,
        7,
        8,
        9
    ];
    $characterLetters = [
        'a',
        'b',
        'c',
        'D',
        'E',
        'f'
    ];

    $characterSymbols = [
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
    $carachterPsw = array_merge($characterNumbers, $characterLetters, $characterSymbols);
    // lancio la session solo se il get non è vuoto
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
    <!-- STILI -->
    <link rel="stylesheet" href="./style.css">
    <title>PHP Strong Password Generator</title>
</head>
<body>
<!-- Milestone 4 (BONUS)
Gestire ulteriori parametri per la password: quali caratteri usare fra numeri, lettere e simboli. Possono essere scelti singolarmente (es. solo numeri) oppure possono essere combinati fra loro (es. numeri e simboli, oppure tutti e tre insieme).
Dare all’utente anche la possibilità di permettere o meno la ripetizione di caratteri uguali. -->
<div class="container mf-container">
   <div class="content-page">
        <form action="./index.php" method="GET">
            <div class="number">
                <label class="form-label" for="inputNPsw">Inserisci il numero di caratteri della tua password</label> 
                <input class="form-control"  type="number" placeholder="Inserisci il numero di caratteri" name="nCharactersPsw" id="inputNPsw" min="8" max="30">
            </div>
            <div class="checkbox">
                <label for="checkBox">QUALI CARATTERI USARE:</label> <br>
                <input type="checkbox" id="checkBox" name="include[]" value="symbols"> CARATTERI SPECIALI <br>
                <input type="checkbox" id="checkBox" name="include[]" value="letters"> LETTERE <br>
                <input type="checkbox" id="checkBox" name="include[]" value="numbers"> Numeri
            </div>
            <div class="radio">
                <label for="radiobox"> Caratteri uguali:</label> 
                <input type="radio" id="radiobox" name="equalCaracters" value="si"> SI 
                <input type="radio" id="radiobox" name="equalCaracters" value="no"> NO
            </div>
            <button type="submit" class="btn btn-primary my-5">Genera</button>
        </form>
   
       
        <?php 
            if(isset($_GET['nCharactersPsw'])) :
        ?>
        <h5>
            INSERIRE UN VALORE PER POTER GENERARE LA PASSWORD
        </h5>
    <?php endif; ?>
    </div>
</div>
</body>
</html>