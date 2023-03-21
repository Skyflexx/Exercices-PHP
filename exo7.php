<h1>Exercice 7</h1>

<p>
    Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge :
    Poussin : entre 6 et 7 ans
    Pupille : entre 8 et 9 ans
    Minime : entre 10 et 11 ans
    Cadet : à partir de 12 ans
    Si la catégorie n’est pas gérée, merci de le préciser.
</p>
    
<h2>

     <?php

     $currentAge = 19;

     if($currentAge < 18){

        if($currentAge >= 12){

            echo "L'enfant qui a $currentAge ans appartient à la catégorie << Cadet >>.";

        } else if($currentAge >= 10){

            echo "L'enfant qui a $currentAge ans appartient à la catégorie << Minime >>.";

        } else if($currentAge >= 8){

            echo "L'enfant qui a $currentAge ans appartient à la catégorie << Pupille >>.";

        } else if ($currentAge >= 6){

            echo "L'enfant qui a $currentAge ans appartient à la catégorie << Poussin >>.";

        } else {

            echo "L'enfant qui a $currentAge ans n'entre dans aucune catégorie";
            
        }
    } else {

        echo "L'enfant qui a $currentAge ans n'entre dans aucune catégorie";
    }
     
     /*  L'algo traite le code ligne par ligne. Si j'avais fait <=, ça n'aurait 
     pas fonctionné et j'aurai du mettre une seconde condition. vu que
     c'est traité ligne par ligne,  D'abord on teste si c'est supérieur ou = à 12, sinon on teste
     si c'est supérieur ou égal à 10... etc. ce qui est plus économe en code et conditions*/ 

     ?>


</h2>