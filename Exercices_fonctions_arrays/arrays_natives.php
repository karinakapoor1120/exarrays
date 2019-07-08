<?php

  //1.  Affichez les chiffres pairs entre 0 et 100 OK . Affichez les chiffres impairs entre 0 et 100 KO

//  $min = 0;
//  $max = 100;
//  
//  if($min && $max %2 == 0){
//      echo $min.$max;
//  }
//  echo $min.$max;
//  
//  
//$nombre_a_afficher = 50;
//$i = 0;
//
//for (;;) {
//    if ($i > ($nombre_a_afficher*2))
//        break;
//    
//    if ($i%2 == 0)
//        echo $i.'<br />';
//    
//    $i++;
//}

$nombre_a_afficher_impairs = 33;
$i = 0;

for (;;) {
    if ($i > ($nombre_a_afficher_impairs*3))
        break;
    
    if ($i%3 == 0)
        echo $i.'<br />';
    
    $i++;
}
//2.Affichez un tableau HTML contenant trois colonnes: chiffres pairs, impairs, chiffres aléatoire
//entre 0 tet 100(fonction rand). Créer les en-têtes pour les colonnes.


?>
<html>
<head>
	 <meta charset="utf-8" />
	 <title>Affichage en colonne avec array - solution 1</title>
</head>
<body>

<?php
// $NbrLigne : le nombre de lignes
// $NbrCol : le nombre de colonnes : calcul automatique
// --------------------------------
// (exemple)
$NbrLigne = 3;
$tableau = array('elt0','elt1','elt2','elt3','elt4','elt5','elt6','elt7','elt8','elt9');
// --------------------------------
// $NbreData : le nombre de données à afficher
$NbreData = count($tableau);
// --------------------------------
$NbrCol = 0;
// affichage
if ($NbreData != 0) {
	$k = 0; // indice du tableau
?>
	<table>
	<tbody>
		<tr>
<?php
	while ($k < $NbreData) 
	{
?>			<td valign="top">
				<table border="1">
<?php
		for ($i=1; $i<=$NbrLigne; $i++) 
		{
			if ($k < $NbreData) 
			{
?>
					<tr>
						<td>
<?php					// -------------------------
						// DONNEES A AFFICHER dans la cellule
						echo $tableau[$k];
						// -------------------------
?>
						</td>
					</tr>
<?php
				$k++;
			}
			if ($i == $NbrLigne) 
			{
?>
				</table>
			</td>
<?php
			}
		}
		$NbrCol++;
	}
?>
		</tr>
	<tbody>
	</table>
<?php
} else {
?>	pas de données à afficher
<?php
}
?>

</body>
</html>

<?php

//3. Créez un array contenant les chiffres pairs entre 0 et 100 en utilisant
//une boucle for
//une boucle while

$arraypair= [] ;
for ($i= 0; $i<$arraypair ; $i++){
    if ($i > ($nombre_a_afficher_impairs*3))
        break;
    
    if ($i%3 == 0)
     //   echo $i.'<br />';
    
    $i++;
}

//7.Créez un array associatif contenant des pays et des capitales. Affichez son contenu
//en utilisant foreach OK

$pays_capitales= [
    'Egypte'=>'LeCaire',
    'Maroc' =>'Casablanca'
];

foreach ($pays_capitales as $key => $value) {
    echo'</br>';
     echo $key.' '.' : '.$value;
}
   
//8.Rajuter 2 nouveaux pays à votre array et imprimer son contenu en utilisant print_r
$pays_capitales[]=['France,Belgique'];
//print_r($pays_capitales);

//9.Faites la même chose en utilisant array_push
$pays_supllementaire = array_push($pays_capitales,'Luxembourg');
print_r($pays_capitales);
?>