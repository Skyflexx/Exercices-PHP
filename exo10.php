<h1>Exercice 10</h1>

<p>

    A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui
    affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et
    1 €.
       

</p>
    


<h2>

<?php

    $montantDu = 200;
    $montantVerse = 300;

    $resteDu = $montantVerse - $montantDu; 
    
    echo "Montant à payer : $montantDu € <br> Montant versé : $montantVerse € <br> Reste du : $resteDu €<br>";


// CALCUL DU NOMBRE DE BILLETS DE 10
     

    $facto = intdiv($resteDu, 10); // Variable qui sera utilisée pour diviser par 10, 5, 2 et 1.

    // on fait une division entière pour obtenir le nbr de fois où on peut diviser par 10.

    $dix = floor($facto);   // Contient le nombre de billet de 10, sans la virgule avec Floor

    $resteDu = $resteDu - ($dix * 10); // Recalcul du reste du en retirant le nombre de billets de 10


 // CALCUL DU NOMBRE DE BILLETS DE 5   


    $facto = intdiv($resteDu, 5); // On redivise par 5 pour obtenir le nombre de fois où le resteDu est divisable par 5

    $cinq = floor($facto); // On obtient ainsi le nombre de billets en retirant ce qu'il y a après la virgule

    $resteDu = $resteDu - ($cinq * 5); 

   
// CALCUL DU NOMBRE DE PIECES DE 2

    $facto = intdiv($resteDu, 2);

    $deux = floor($facto);   

    $resteDu = $resteDu - ($deux * 2);     // ResteDu donnera le nombre de pièces de 1.


// CALCUL DU NOMBRE DE PIECES DE 1  
    
    
    echo "Rendu de monnaie : <br> $dix billets de 10€ - $cinq billets de 5€ - $deux pièces de 2 € - $resteDu pièces de 1€ "

?>

 </h2>