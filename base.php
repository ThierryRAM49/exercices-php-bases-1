<!-- Exercices PHP – Bases de la
programmation 
1. Variables et affichage
Exercice 1.1 – Affichage d’un prénom
Objectif : Déclarer une variable et afficher un message.
Créez une variable appelée $prenom contenant votre prénom entre
guillemets (chaîne de caractères).
Utilisez echo pour afficher le message suivant :
Bonjour, [prénom] !
Ce qu’il faut utiliser : une variable, une chaîne de caractères, echo .<br>
-->

<?php
$prenom = "Thierry";
echo "Bonjour, $prenom !";
?>

<!--Exercice 1.2 – Addition de deux nombres
Objectif : Manipuler des variables numériques et effectuer une addition.
Créez deux variables :
$acontenant un nombre entier (ex. : 4)
$bcontenant un autre nombre entier (ex. : 7)
Calculez leur somme et stockez-la dans une variable $somme .
Affichez :
La somme de 4 et 7 est : 11
Ce qu’il faut utiliser : variables numériques, opérateur + , echo .
--><br>

<?php
$a = 4;
$b = 7;
$somme = $a + $b;
echo "La somme de $a et $b est : $somme";
?>

<!--Exercice 1.3 – Présentation personnelle
Objectif : Concaténer des chaînes de caractères avec des variables.
Créez les variables suivantes :
$prenom
$nom
: chaîne de caractères
: chaîne de caractères
Exercice 1.3 – Présentation personnelle
Objectif : Concaténer des chaînes de caractères avec des variables.
Créez les variables suivantes :
$prenom
$nom
: chaîne de caractères
: chaîne de caractères --> <br>

<?php
$prenom = "Thierry";
$nom = "RAMANITRA";
$age = 54;
echo "Bonjour, je m'appelle $prenom $nom et j'ai $age ans.";
?>

<!--2. Conditions
Exercice 2.1 – Majeur ou mineur
Objectif : Utiliser une condition if .
Créez une variable $age contenant un nombre.
Si l’âge est supérieur ou égal à 18, affichez :
Vous êtes majeur.
Sinon, affichez :
Vous êtes mineur.
Ce qu’il faut utiliser : if , opérateurs de comparaison ( >= ), echo .--> <br>
<?php
$age = 54;          
if ($age >= 18) {
    echo "Vous etes majeur.";
    } else {
    echo "Vous etes mineur.";
}
?>

<!--Exercice 2.3 – Appréciation d’une note
Objectif : Utiliser plusieurs conditions if / elseif / else .
Créez une variable $note contenant un nombre entre 0 et 20.
Affichez une appréciation selon la grille suivante :
Moins de 10 : Insuffisant
De 10 à 13 inclus : Passable
De 14 à 16 inclus : Bien
17 ou plus : Très bien
Ce qu’il faut utiliser : if / elseif / else , opérateurs logiques. --> <br>

<?php
$note = 10;
if ($note < 10) {
    echo "Insuffisant";
} elseif ($note >= 10 && $note <= 13) {
    echo "Passable";
} elseif ($note >= 14 && $note <= 16) {
    echo "Bien";
} else {
    echo "Tres bien";
}
?>

<!--3. Boucles
Exercice 3.1 – Compter de 1 à 10
Objectif : Utiliser une boucle for .
À l’aide d’une boucle for , affichez les nombres de 1 à 10, un par ligne.
Ce qu’il faut utiliser : for , echo . --> <br>

<?php
for ($i = 1; $i <= 10; $i++) {
    echo $i . "<br>";
}
?>


<!-- Exercice 3.2 – Nombres pairs jusqu’à 20
Objectif : Utiliser une boucle while .
Créez une variable $i initialisée à 0.
Tant que $i est inférieur ou égal à 20 :
Si $i est pair, affichez-le.
Incrémentez $i de 1 à chaque tour.
Ce qu’il faut utiliser : while , if , % , echo . --> <br>

<?php
$i = 0;
while ($i <= 20) {
    if ($i % 2 == 0) {
        echo $i . "<br>";
    }
    $i++;
}
?>

<!-- Exercice 3.3 – Table de multiplication d’un nombre
Objectif : Utiliser une boucle pour générer une table.
Créez une variable $n contenant un nombre entier (ex. : 5).
Utilisez une boucle for pour afficher les 10 premiers résultats de la table de
$n :
Exemple : 5 x 1 = 5 , 5 x 2 = 10 , ..., 5 x 10 = 50
Ce qu’il faut utiliser : for , * , echo . --> <br>

<?php
$n = 5;
for ($i = 1; $i <= 10; $i++) {
    echo $n . " x " . $i . " = " . $n * $i . "<br>";
}
?>

<!-- 4. Débogage avec var_dump
Exercice 4.1 – Corriger les erreurs de syntaxe
Objectif : Identifier et corriger les erreurs avec var_dump .
Voici un code avec plusieurs erreurs.
Instructions :
Copiez ce code dans un fichier PHP.
Utilisez var_dump() pour afficher le contenu des variables et identifier les
erreurs.
Corrigez le script. 
$nombre1 = 5
$nombre2 = "3";
$somme = $nombre1 + $nombre;
echo "La somme est : $somme

Ce qu’il faut utiliser : var_dump($variable); , vérifier les noms, les points-virgules, les
guillemets fermants.
-->


<?php

$nombre1 = 5;
$nombre2 = "3";           // ← même si c'est une chaîne, PHP convertit automatiquement en nombre

echo "Débogage étape par étape :\n";
echo "-------------------------\n";

var_dump($nombre1);       // int(5)
var_dump($nombre2);       // string(1) "3"

$somme = $nombre1 + $nombre2;

var_dump($somme);         // int(8)   ← la conversion a bien eu lieu

echo "\nRésultat final :\n";
echo "La somme de $nombre1 et $nombre2 est : $somme\n";
// ou
// echo 'La somme de ' . $nombre1 . ' et ' . $nombre2 . ' est : ' . $somme . "\n";

?>

<!--5. Exercices d’application (plus complets)
Exercice 5.1 – Générateur de mot de passe simplifié
Objectif : Générer une chaîne aléatoire de 8 caractères alphanumériques.
Créez une variable $motDePasse vide.
Utilisez une boucle for pour y ajouter 8 caractères aléatoires.
Pour chaque caractère, tirez un nombre entre 0 et 25 (lettres) ou entre 0 et
9 (chiffres), puis convertissez-le en caractère à l’aide de chr() .
Ce qu’il faut utiliser : for , rand() , chr() , concaténation ( .= ).
Note : Ne pas utiliser de tableau de caractères. Utilisez
directement des conversions numériques vers lettres. générer une lettre aléatoire il faut d'abord générer un nombre aléatoire entre 97 et 122 (code ASCII des lettres), puis utiliser chr() sur ce nombre afin d'obtenir la lettre correspondante.
$nombre = rand(97,122);
$lettre = chr($nombre);--> <br>

<?php
$motDePasse = "";
for ($i = 0; $i < 8; $i++) {
    $nombre = rand(97, 122);
    $lettre = chr($nombre);
    $motDePasse .= $lettre;
}
echo $motDePasse;
?>

<!-- Exercice 5.2 – Calculatrice simple
Objectif : Appliquer une opération arithmétique choisie.
Créez trois variables :
$a: un nombre
$b: un autre nombre
$operation
: un caractère représentant l’opération ( + , , , / )
Utilisez une structure if / elseif pour effectuer l’opération correspondant au
symbole.
Affichez le résultat.
Ce qu’il faut utiliser : if , opérateurs arithmétiques, echo . --> <br>

<?php
$a = 10;
$b = 3;
$operation = "/";
if ($operation == "+") {
    echo $a + $b;
} elseif ($operation == "-") {
    echo $a - $b;
} elseif ($operation == "*") {
    echo $a * $b;
} elseif ($operation == "/") {
    echo $a / $b;
}
?>