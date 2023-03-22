<h1>Exercice 9</h1>

<p>

    Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.
    Si la personne est une femme dont l’âge est compris entre 18 et 35 ans ou si c’est un homme de
    plus de 20 ans, alors celle-ci est imposable (sinon ce n’est pas le cas, « non imposable »).
    

</p>
    


<h2>

<?php

    $age = 17;
    $sexe = "F";

    $impotMasculin = ($age > 18 && $age <= 35 && $sexe == "F"); // Si la condition est remplie, ça renvoie True
    $impotFeminin = ($age > 18 && $age >= 20 && $sexe == "M") ;

    /*Permet de stocker des conditions dans une variable. Dans un premier temps on met les conditions,
    suivi de ? et les resultats retournés derrière en fct de si la condition est remplie ou non.
    
    Exemple : $result = $age >= 18 ? "majeur" : "mineur";
    */
    

    echo "Age : $age <br> Sexe : $sexe <br>";      

        if($impotMasculin || $impotFeminin ){  // Si $masculin ou $feminin = true, alors
            
            echo "La personne est imposable";

        } else {
            echo "La personne est non imposable";
    }
    
    
   

?>

 </h2>