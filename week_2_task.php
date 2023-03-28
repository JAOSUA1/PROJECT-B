<?php
    $age = 19;
    $PVC = "yes";
    $ward = 020;

    if($age < 18){
        echo "Underage";
    }elseif($PVC != "yes"){
        echo "No PVC";
    }elseif($ward != 020){
        echo "Wrong ward";
    }else{
        echo "Voter eligible to vote";
    }
?>