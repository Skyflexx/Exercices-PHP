<h1>Exercice 4</h1>

<p>
    Ecrire un algorithme permettant de savoir si une phrase est palindrome.
</p>
    
<h2>

     <?php

        $phrase = "Engage le jeu que je le gagne";

        $phraseModif = strtolower($phrase); //On met la phrase en minuscule
       
        $phraseModif = str_replace(" ", "", $phraseModif) ;  //On retire les espaces

        $phraseInv = strrev($phraseModif); //On inverse la phrase
            

        if($phraseModif === $phraseInv){

            echo "La phrase $phrase est un palindrome";

            } else {

                echo "la phrase $phrase n'est pas un palindrome";
                
            }
                
     

     ?>


</h2>