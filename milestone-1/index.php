<?php 
    $carachterPsw = [
        'letters' => [
            'a','b','c','d','e','f'
        ],
        'numbers' => [
            0,1,2,3,4,5,6,7,8,9
        ],
        'specialCharacters' => [
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
        ]
    ];
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
<!-- 
                CONSEGNA:    
Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli (!?&%$<>^+-*/()[]{}@#_=)) da restituire all’utente.
Scriviamo tutto (logica e layout) in un unico file index.php -->
<div class="container">
    <div class="row">
        <div class="col my-5">
            <form action="./index.php" method="GET">
                <label class="form-label" for="inputNPsw">Inserisci il numero di caratteri della tua password</label> 
                <input class="form-control w-25"  type="number" placeholder="Inserisci il numero di caratteri" name="nCharactersPsw" id="inputNPsw">
                <button type="submit" class="btn btn-primary my-5">Genera</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>