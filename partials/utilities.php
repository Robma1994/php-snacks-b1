<?php

    function media($arrayNum){
        $result = 0 ;
        $lenght = count($arrayNum);
        foreach($arrayNum as $num){
            $totale = $result += $num; 
            $media = $totale / $lenght;
        }
        return $media;
    }   

?>