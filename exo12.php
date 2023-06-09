<h1>Exercice 12</h1>

<p>

    A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée
    (tableau contenant clé et valeur), dire bonjour aux différentes personnes dans leur langue
    respective (français ➔ « Salut », anglais ➔ « Hello », espagnol ➔ « Hola »)
    Exemple : tableau ➔ Mickaël -> FRA, Virgile -> ESP, Marie-Claire -> ENG


</p>

<h2>

<?php

// ------------------ TEST AVEC LE SWITCH CASE -----------------------------------

$tableau = array("Mickael" => "fra", "Virgile" => "esp", "Marie-Claire" => "eng");

// la fct sayhello remplace les boucles. "Dans le cas où... alors."

function sayHello ($name, $lang){

    switch($lang){

        case "fra" : echo "Salut ".$name."<br>";

        break; // Ne pas oublier le break pour annoncer la fin de la fonction

        case "esp" : echo "Hola ".$name."<br>";

        break;

        case "eng" : echo "Hello ".$name."<br>";

        break;
    }

};


// "Mickael" c'est la clé et "fra" c'est l'élément.  


foreach ($tableau as $name => $lang){
    
    sayHello($name, $lang);

}
    
/* Foreach permet de parcourir un tableau. On met le nom du tableau, puis

la clé => l'item dans des variables */

    
?>

</h2>
    


<h2>

<?php

// TEST AVEC DES CONDITIONS

$tableau = array("Mickael" => "fra", "Virgile" => "esp", "Marie-Claire" => "eng");


// "Mickael" c'est la clé et "fra" c'est l'élément. 



foreach ($tableau as $nom => $langue){
    
    if($langue == "fra"){ // Si l'élément langue = fra alors on affiche salut
       
        echo "Salut ";

    } elseif($langue == "eng"){
       
        echo "Hello ";

    } else {
        
        echo "Hola ";
    }

    echo "$nom <br>"; // Puis on affiche le nom associé à l'objet parcouru

};


    
/* Foreach permet de parcourir un tableau. On met le nom du tableau, puis

la clé => l'item dans des variables */

    
?>

</h2>

<h2>
    
<?php 
   
// DEUXIEME ALTERNATIVE, CLASSER LE TABLEAU PAR ORDRE ALPHABETIQUE



ksort($tableau); // ksort, trier par clé car ce sont les noms qui nous intéressent


foreach ($tableau as $nom => $langue){ 

    if($langue == "fra"){ 
       
        echo "Salut ";

    } elseif($langue == "eng"){
       
        echo "Hello ";

    } else {
       
        echo "Hola ";

    }

    echo "$nom <br>"; 

}

  

?>

</h2>