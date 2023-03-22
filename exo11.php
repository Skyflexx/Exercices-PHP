<h1>Exercice 11</h1>

<p>

    Initialiser un tableau de x marques de voitures. Ecrire un algorithme permettant de parcourir ce
    tableau et d’en afficher le contenu (une marque de voiture par ligne). Il est également demandé
    d’afficher le nombre de marques de voitures présentes dans le tableau.

    Exemple : tableau ➔ « Peugeot », « Renault », « BMW », « Mercedes »


</p>
    


<h2>

<?php

    $marques = array("Peugeot", "Renault", "BMW", "Mercedes"); // Création d'un array
    $countMarques = count($marques); //nbr d'items dans l'array

    
    echo "Il y a $countMarques marques de voitures dans le tableau :<br><ul> ";

    for($i = 0; $i < $countMarques; $i++){

        echo " <li> $marques[$i] <br>";
        
    }

    echo "</ul>"

    /*Création d'une boucle for pour parcourir l'array. L'array commence à 0 donc i 
    initialisé à 0. Tant que i est inférieur au nombre d'items dans l'array, on affiche
    l'item ayant pour indice "i". Car on peut appeler un item en faisant $array[numero item] 
    

     Attention à la boucle, $i<= $countMarques n'a pas fonctionné car il n'y a pas d'item
    numéro 4 dans l'array
    */


   

?>

 </h2>