<h1>Exercice 13</h1>

<p>

Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de
coefficient). Elle devra être affichée avec 2 décimales.
    

</p>
    


<h2>

<?php

    $notes = array(10, 12, 8, 19, 3, 16, 11, 13, 9);
    $total = 0; // Variable qui sera utilisée pour calculer la somme des notes
    $nbNotes = count($notes); // Compte le nombre d'items dans l'array
   
    echo "Les notes obtenues par l'élève sont : ";

    foreach ($notes as $key => $value){ // On parcourt le tableau
       
       $total = $total + $notes[$key]; 

       // A chaque itération chaque note est ajoutée à la somme des précédentes notes

       echo "$notes[$key] "; // A chaque itération on affiche la note
    }
    
    $moy = $total / $nbNotes; // Calcul de la moyenne

    echo "<br> Sa moyenne générale est donc de : $moy";
    
   

?>

 </h2>