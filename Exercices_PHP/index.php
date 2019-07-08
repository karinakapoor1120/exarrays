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
            //1.Créez une boucle for qui affiche 10 fois "Bonjour, je suis dans une boucle !" // put your code here
        $message = "Bonjour, je suis dans une boucle !";
        for( $i =0 ; $i<10; $i++){
            echo'</br>';
            echo $message ;
        }
        
            //2.Créez une boucle for qui affiche les valeurs entre 1 et 100 (incluses) OK
        $x= 0;
        $y= 100;
        for ($i=0; $i<101;$i++){
        //   echo'</br>';
             echo','.' ';
             echo $x++;
            
        }
            //3. Créez une boucle for qui affiche les valeurs entre 10 et 50 (incluses) OK

            //4.Créez un array $vals contenant les valeurs 20,50,7,54
        $vals=array(20,50,7,54);
        //var_dump($vals);

            //5.Rajoutez les valeurs 150 et 300 à l'array précédant (ailleurs de la déclaration de l'array) OK
        $vals[4]=150;
        $vals[5]=300;
        //var_dump($vals);
        
            //6a.Créez une boucle foreach pour afficher l'array $vals. OK
//            foreach ($vals as $val){
//                echo'</br>';
//                echo $val;
//            }
            
            //6a.Créez une boucle for pour afficher l'array $vals. OK
//            for($i =0 ; $i<1 ; $i++){
//                echo'</br>';
//                print_r($vals);
//            }
        //var_dump($vals);
            
             //7.Créez une fonction qui reçoit un nom et affiche "Bonjour(nom)!"Testez avec plusieurs noms OK
                
            function bonjour($nom){
                echo'</br>';
                echo 'Bonjour'.' '.$nom.'!';
                             }
                            
            bonjour('Annie');
            
            //8.Créez une fonction afficheTableau qui reçoit un array et affiche son contenu.Utilisez foreach pour vous facilitez la tâche.
            //Testez là avec l'array $vals OK
            
//            function afficheTableau($vals){
//                 foreach ($vals as $val){
//                echo'</br>';
//                echo $val;
//                }
//            }
//            afficheTableau($vals);
            
            //9.Créez une fonction qui reçoit un array et renvoie un array inversé OK
            $valeurs=array(20,50,7,54);
            $reverse= array_reverse($valeurs);
             
            function renverseTableau($reverse){
                return $reverse;
               
            }
            var_dump($reverse);
            renverseTableau($reverse);
            
            //10.Créez une fonction qui reçoit un array et le renverse (l’array original change,
            // on a besoin d’utiliser une référence) 
            
            //11.Créez un array associatif $film1 contenant le nom, le genre et le réalisateur d'un film.
            // Créez $film2 et $film3 contenant les données d'autres films 
            
            $film1= ['nom'=>'Pulp Fiction',                
                'genre'=>'Fiction',
            //  'réalisateur'=>'Quentin Tarentino'                               
                ];
            
                
            //  var_dump($film1);
            
            $film2= ['nom'=>'Inglorious Bastard',
                'genre'=>'Fiction',
                'réalisateur'=>'Quentin Tarentino'                               
                ];
            
            $film3=['nom'=>'Kill Bill',
                'genre'=>'Fiction',
                'réalisateur'=>'Quentin Tarentino'                               
                ];
            
            //12. Affichez le contenu d'un des films qu'on vient de créer en utilisant une boucle foreach OK
            foreach ($film1 as $contenu=>$description){
                echo'</br>';
                echo $contenu.':'.' '.$description;
            }
            
            //13.Créez une fonction afficheAssoc qui reçoit un array associatif et affiche son contenu en utilisant une boucle foreach.
            // Testez la avec l'array que vous venez de créer OK
            
            function afficheAssoc($film2){
                foreach ($film2 as $contenu=>$description){
                echo'</br>';
                echo $contenu.':'.' '.$description;
            }
            }
            afficheAssoc($film2);
            
            //14.Rajoutez une "dateSortie" à chacun de films crées en 9)OK
            $film1['date de sortie']=1998;
            //var_dump($film1);
            
            //15. Appelez la fonction afficheAssoc  que vous avez créé pour voir le contenu de chaque film.
            // On devrait voir la dateSortie en plus du nom, genre et réalisateur… OK
            
            afficheAssoc($film1);
            
            //16. Effacez le réalisateur du $film1. Affichez le contenu du film1 pour vous assurer que le réalisateur n'est plus là OK
            // var_dump($film1);
            
            //17. Créez une fonction soustraction qui renvoie la soustraction de deux valeurs reçues en paramètre. OK
            // Ex: soustraction (25,15) va renvoyer la valeur 10 
//            $x= 20;
//            $y= 10;
//            
//            function soustraction($x,$y){
//                if($y> $x){
//                    echo 'Le résultat est négatif';
//                }  else {
//                    echo $x- $y;
//                       }
//                
//            }
            //   soustraction($x, $y);
            
            //18. Modifiez la fonction précédente pour que, avant de renvoyer le résultat de la soustraction,
            // elle affiche "Le résultat est négatif!" si ce résultat est négatif OK
                 
            //19. Créez une fonction afficheValeurs qui affiche tous les entiers qui se trouvent entre deux valeurs reçues comme paramètre.
            // Par exemple:    afficheValeurs (40,100) affichera toutes les valeurs entre 40 et 100 
            //  afficheValeurs (20,80) affichera toutes les valeurs entre 20 et 80 etc… KO
//            $x= 40;
//            $y= 100;
            
//            function afficheValeurs(40,100){
//                echo is_int(40,100);
//            }
//            afficheValeurs(40,100);
            
            //20.Le code suivant nous posera de problèmes. Pourquoi? Qu'est-ce qu'on peut faire pour l'arranger?BOUCLE FOLLE
                        
//        $i= 0;
//
//        while ($i<15){ 
//
//        echo "Salut à tous! "; 
//
//        } 

 

            //21.Le code suivant nous posera de problèmes. Pourquoi? Arrangez-le OK
        $tab= array(4,5,1,7); 

        for ($i= 0;  $i<7 ; $i++){ 

    //  echo $tab[$i];

        } 
 

            //22  Créez un array contenant 5 noms d'acteurs
            $acteurs= ['Clint Eastwood','Morgan Freeman','Denzel Washington','Brad Pitt','Bruce Willis'];

            //23  Créez une fonction afficheTableau qui affiche le contenu d'un tableau indexé (pas associatif).
            // Appelez cette fonction pour afficher le contenu du tableau d'acteurs OK
            
            function afficheTableau($acteurs){
                foreach ($acteurs as $acteur){
                    echo'</br>';
                    echo $acteur;
                    echo'</br>';
                }
                
            }
                    
         // afficheTableau($acteurs);
            

            //24. Créez un array associatif contenant de couples personne-âge OK
            $couples=[
                'Annie'=>38,
                'Allister'=>39
            ];                      

            //25. Affichez le contenu avec une boucle foreach OK
            foreach ($couples as $nom=>$age){
                echo'</br>';
                echo $nom.' '.'a'.' '.$age.' '.'ans';
            }

            //26. Créez un array contenant le nom de 4 langues
            $langues= ['français','japonais','russe','mandarin'];

            //27. Changez le contenu de la position 3 par "Danois" OK
            $langues[3]='danois';
        //  var_dump($langues);

            //28. Créez une boucle (un for, un foreach et un while) pour afficher le contenu de l'array OK
            foreach($langues as $langue){
                echo'</br>';
            //  echo $langue;
            }
            
            for( $i= 0; $i< 3; $i++){
                echo'</br>';
            //  echo $langues[$i];
            }
            
            
//            while($langues<3){
//                echo'</br>';
//                echo $langues;
//            }
            
            //29. Amélioriez les boucles for et while précédents en utilisant la fonction count
            

            //30. Effacez l'element de la position 4 dans l'array en utilisant la fonction unset 

            //31. Utilisez la fonction array_search avec deux parametres
            // pour afficher la position d'un certain element dans l'array et "Element pas trouvé" dans le contraire 

            //32. Créez un array vide $languesCopie. Créez une boucle qui rajoute chaque element de l'array $langues dans l'array $languesCopie OK
            $languesCopie= [];
            foreach($langues as $langue){
                echo'</br>';
              //echo $languesCopie[]=$langue;
            }
            
           //33. Créer les fonctions suivantes
           //  a.afficher qui reçoit un array indexé(pas associatif) et affiche ses valeurs OK
            $series= ['Homeland','BreakingBad','Narcos'];
            
            function afficher($series){
                foreach($series as $serie){
                    echo'</br>';
                  echo $serie;
                }
                            }
          //afficher($series);
                            
           //   b. afficherHTML qui reçoit un array indexé(pas associatif) et construit un petit tableau HTML contenant
           //      les valeurs de l'array KO
            $enfants=['Alice','Hadrien'];
            $tab=[ '<table>','<td></td>','<td></td>','<td></td>','</table>'];
            
//            function afficherHTML($enfants,$tab){
//                foreach ($tab as $cel){
//                echo $tab[]=$enfants;          
//                }
//            }
//            var_dump($tab);
//            afficherHTML($enfants,$tab);
            
            //  c.afficherCase qui reçoit deux parametres: un array indexé (pas associatif) et affiche ses valeurs un string
            // $case contenant le mot "majuscules" ou "minuscules". KO
           $enfants= array('Alice,Hadrien');
           $case=strtolower('ALICE');
           
            
            function afficherCase($enfants,$case){
                foreach ($enfants as $prenom){
                    echo'</br>';
                //  echo $case;
                }
            }
            
            //var_dump($case);
            // afficherCase($enfants,$case);
            

            // La fonction afficherCase doit afficher les valeurs de l'array en majuscules ou minuscules
            // selon la valeur du paramètre $case. Pour ce faire, regardez la documentation des fonctions strtoupper et strtolower
            
            
            
            
        ?>
    </body>
</html>
