<?php

/*Escriu un programa PHP per intercanviar el primer i últim caràcter d'una cadena donada i imprimeix la nova cadena.*/

function intercanviadorDeLletres($entrada){

    if(strlen($entrada) ==1){

        echo $entrada;

    }elseif(strlen($entrada) ==2){

        $segundaLetra = substr($entrada, 1); 
        $primeraLetra = $entrada[0];
        echo $segundaLetra.$primeraLetra;

    }else{
        $longitudArray= strlen($entrada);
        //echo "longitud".$longitudArray;

        $primeraLetra = $entrada[0];
        $medioLetra = substr($entrada, 1, -1); 
        $ultimaLetra = substr($entrada , -1);
        
        echo $ultimaLetra . $medioLetra . $primeraLetra;

    }

}
echo "La primera: ",intercanviadorDeLletres("wxyz"), "<br/>";
echo "La segona:  ", intercanviadorDeLletres("a"), "<br/>";
echo "La tercera: ",intercanviadorDeLletres("ab"), "<br/>";
echo "La tercera: ",intercanviadorDeLletres("MariaDolors"), "<br/>";


?>