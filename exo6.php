<h1>Exercice 6</h1>

<p>
    Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité
    d’articles, son prix hors taxe et un taux de TVA (exprimé en décimal. Ex : 20 % -> 0.2)
</p>
    
<h2>

     <?php

     $unitPrice = 9.99;
     $quantity = 5;
     $tva = 0.2;

     $ttcPrice = ($unitPrice + ($unitPrice * $tva)) * $quantity;
     

     echo "Prix unitaire de l'article : $unitPrice € <br>".
     "Quantité : $quantity <br>".
     "Taux de TVA : $tva <br>".
     "Le montant de la facture à régler est de : $ttcPrice €";    

     // Le . permet la concaténation afin de n'avoir qu'un seul Echo
    

     ?>


</h2>