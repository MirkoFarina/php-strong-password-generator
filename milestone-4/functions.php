<?php
 function generatePsw($carachterPsw){
    $pswGenerated = '';
    // se equalcaracters è = a si quindi i caratteri possono essere uguali
    if($_GET['equalCaracters'] === 'si') {
        // aggiungo semplicemente i caratteri random
        for($i = 0; $i < $_GET['nCharactersPsw']; $i++) {
            $pswGenerated .= $carachterPsw[rand(0, count($carachterPsw) - 1)];
        }
    // invece se non possono essere uguali
    }else {
        // faccio un altro controllo se es. chiedi 20 numeri e l'array dei numeri non li contiene stampo brutalmente l'array in ordine secco, se no stampo i caratteri univocamente senza farli ripetere
        if($_GET['nCharactersPsw'] >= count($carachterPsw)) {
            for($i = 0; $i < $_GET['nCharactersPsw']; $i++) {
                $pswGenerated .= $carachterPsw[$i];
            } 
            }else {
                while(strlen($pswGenerated) < $_GET['nCharactersPsw']) {
                    $randomCharacter = $carachterPsw[rand(0, count($carachterPsw) - 1)];
                    if(!str_contains($pswGenerated, $randomCharacter)) {
                        $pswGenerated .= $randomCharacter;
                    }
                };
            }
    }
    return $pswGenerated;
};
