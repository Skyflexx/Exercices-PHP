<h1>Exercice 5</h1>

<p>
    Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros.
    Attention, la valeur générée devra être arrondie à 2 décimales.
</p>
    
<h2>

     <?php

     $montantFrancs = 100;
     $taux = 6.55957;
     $montantEuros = $montantFrancs / $taux;
     

     /*  La fct Round permet d'arrondir. On choisit le montant, le nombre de décimales et 
     Le type d'arrondi. Ici un arrondi en dessous.*/

     echo "Montant en francs : $montantFrancs <br>".
     "$montantFrancs francs = ".
     round($montantEuros, 2, PHP_ROUND_HALF_DOWN).
     " €";

     /*Dans cet exemple j'ai testé de concaténer le resultat pour appeler une fonction
     dans Echo. On concatene avec le . et retour à la ligne pour la lisibilité.
     
     Idéalement faut que ce soit lisible, donc j'aurai pu déclarer une autre variable ou
     bien simplement modifier la variable montantEuro directement */   
        
    

     ?>


</h2>