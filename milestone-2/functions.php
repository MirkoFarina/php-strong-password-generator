<?php
 function generatePsw($carachterPsw){
    $pswGenerated = '';
    for($i = 0; $i < $_GET['nCharactersPsw']; $i++) {
        $pswGenerated .= $carachterPsw[rand(0, count($carachterPsw) - 1)];
    }
    echo $pswGenerated;
};