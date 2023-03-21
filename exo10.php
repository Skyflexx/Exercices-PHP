<h1>Exercice 10</h1>

<p>

    A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui
    affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et
    1 €.
       

</p>
    


<h2>

<?php

    $montantDu = 163;
    $montantVerse = 300;
    $resteDu = $montantVerse - $montantDu; // calcul de la différence
    
    echo "Montant à payer : $montantDu € <br> Montant versé : $montantVerse € <br> Reste du : $resteDu €<br>";


// NOMBRE DE BILLETS DE 10
     

    $facto = intdiv($resteDu, 10); // Variable qui sera utilisée pour diviser par 10, 5, 2 et 1

    $dix = floor($facto);   // Contient le nombre de billet de 10, sans la virgule avec Floor

    echo "$dix billets de 10€"; // Affichage du resultat.

    $resteDu = $resteDu - ($dix * 10); // Recalcul du reste du en retirant le nombre de billets de 10


 // NOMBRES DE BILLETS DE 5   


    $facto = intdiv($resteDu, 5); // On redivise par 5 pour obtenir le nombre de billet de 5

    $cinq = floor($facto); // On obtient ainsi le nombre de billets en retirant ce qu'il y a après la virgule

    echo " - $cinq billets de 5€ "; // affichage

    $resteDu = $resteDu - ($cinq * 5); 

   
// NOMBRES DE PIECES DE 2

    $facto = intdiv($resteDu, 2);

    $deux = floor($facto);   

    echo " - $deux pièces de 2 € ";


// NOMBRE DE PIECES DE 1



    $resteDu = $resteDu - ($deux * 2);

    $facto = intdiv($resteDu, 1);

    $un = floor($facto); 

    echo " - $un pièces de 1€ ";
    
    

?>

 </h2>