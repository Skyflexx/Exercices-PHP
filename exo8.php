<h1>Exercice 8</h1>

<p>

    Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre sous la
    forme :

</p>
    
<h2>

<?php

    $nbr = 18;
        
    echo "Table de $nbr :<br>";

    for ($i=1; $i<=10; $i++){
        echo "$i x $nbr = ". // Affichage du début de la table genre " 5 x 1 ="
        $result = $i * $nbr. // Calcul et affichage direct du resultat
        "<br>";
     }

     /* Creation d'une boucle tant qu'elle est inférieure à 10, on incrémente et on affiche la valeur du
     compteur qui servira pour la table de multiplication. Et affichage du resultat.
     Attention la boucle doit commencer à 1. sinon on afficherait 0 x nbr.*/       

?>
     
</h2>

<h2>

<?php

    $i = 1;

    echo "Table de $nbr :<br>";
                
    while ($i <= 10){
        echo "$i x $nbr = ". // Affichage du début de la table genre " 5 x 1 ="
        $result = $i * $nbr. // Calcul et affichage direct du resultat
        "<br>";
        $i++;
    }

        /* Boucle "tant que" i est inf ou égal à 10, on incrémente et on calcule. Quand i = 10 elle s'execute
        une dernière fois.*/

?>

 </h2>