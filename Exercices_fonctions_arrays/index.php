<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
                
        //1. Développez une fonction crée un array de 25 entiers aléatoires (utilisez mt_rand) et l'affiche KO
        
      
    $random = rand();
    $randrange = rand(1,10);
    $mtrandrange = mt_rand(1,100);
       $min= 10;
       $max= 50;
       $array= mt_rand($min, $max);
       
       function random($array){
            for ($i= 0 ; $i< $array ; $i++){
                echo '</br>';
                echo $array;
                
            }
        }        
    //  var_dump($array);
    //    random($array);
        
        
        //2. Modifiez la fonction précédente pour qu'elle puisse recevoir le nombre de valeurs que contient l'array.
        //3. Développez une fonction capable de créer un array de 25 entiers aléatoires (utilisez rand) et l'affiche
        $array1= array(4,6,87);
        $random2= array_rand($array1);
        function  arrayrandom($random2){
            for($i= 0; $i<0 ;$i++){
                echo $random2[$i];
            }
        }
    //    var_dump($random2);
        arrayrandom($random2);
        
        
        
        ?>
    </body>
</html>
