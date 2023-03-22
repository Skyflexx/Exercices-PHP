<h1>Exercice 14</h1>

<p>

Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours)
    

</p>
    


<h2>

<?php


    $date = new DateTime("2018-05-21"); // On obtient la date du jour par défaut si pas de date à l'intérieur.

    $datePeople = new DateTime("1985-01-17"); // format Y M D

    $difference = $date->diff($datePeople); // Calcule la diff entre les deux dates

    echo "Age de la personne :  $difference->y années "."$difference->m mois "."$difference->d jours";


    /* La différence d'âge est enregistrée dans $difference. Ensuite je peux  
    selectionner les années $difference->y, puis les mois, puis les jours*/
    

?>

 </h2>