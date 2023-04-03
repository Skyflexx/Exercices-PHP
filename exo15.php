<h1>Exercice 15</h1>

<p>

    Créer une classe Personne (nom, prénom et date de naissance).
    Instancier 2 personnes et afficher leurs informations : nom, prénom et âge.
    $p1 = new Personne("DUPONT", "Michel", "1980-02-19") ;
    $p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17") ;
    

</p>

<h2>

<?php    

    class personne{

        // initialisation des variables attendues

        public string $nom;
        public string $prenom;
        public DateTime $date; // Initialisation d'une date

        public function __construct (string $name, string $lastName, string $datum){

            $this->nom = $name;  //$this permet d'utiliser les propriétés de la classe. Ici on initialise le $this de nom, prenom et date.
            $this->prenom = $lastName;
            $this->date = new Datetime($datum); // Permet de formater la date rentrée par l'user qu'on relie à "date" 

        }

        public function calculAge(){ // Cette fonction va calculer l'âge de la personne. 

            $now = new DateTime(); // initialisation de la date d'aujourd'hui.

            $dateNaiss = $this->date; // On va chercher la valeur rentrée par l'user en allant chercher date via le $this (initialisé dans le construct)

            $diff = date_diff($now, $dateNaiss); // date_diff est une fonction de la classe Datetime qui attend 2 paramètres.
            
            return $diff->y; // on retourne le "y" c'est à dire le nombre d'années dans la classe Datetime.

        }

        public function __toString(){ // Cette fct va afficher le resultat directement.

            return $this->nom." ".$this->prenom." a ".$this->calculAge()." ans. <br>"; // Retourne du coup le nom, le prénom rentré par l'user et on lance la fonction calculAge.
        }
    }


    // La classe est créée, maintenant on créé nos personnes. On les instancie.

    echo $p1 = new personne ("Jean", "meuh", "1985-01-02"); // On instancie la personne, et on va afficher directement le resultat car le toString lance la fonction calculAge.
    echo $p2 = new personne ("DUCHEMIN", "Alice", "1985-01-17");
?>

 </h2>