<?php
 function generatePsw($carachterPsw){
    $pswGenerated = '';
    if($_GET['equalCaracters'] === 'si') {
        for($i = 0; $i < $_GET['nCharactersPsw']; $i++) {
            $pswGenerated .= $carachterPsw[rand(0, count($carachterPsw) - 1)];
        }
    }else {
        while(strlen($pswGenerated) < $_GET['nCharactersPsw']) {
            $randomCharacter = $carachterPsw[rand(0, count($carachterPsw) - 1)];
            if(!str_contains($pswGenerated, $randomCharacter)) {
                $pswGenerated .= $randomCharacter;
            }
        }
    }
    return $pswGenerated;
};