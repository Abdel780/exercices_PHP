<?php
    require 'partials/head.php';
?>  

<?php
// Exercice 1:
echo '<p> Hello World, Bienvenue sur mon premier script PHP</p>';
?>

<?php
//Exercice 2:
echo '<p> Bonjour tout le monde !</p>';

print '<p> Aujourd\'hui, nous sommes le 02/09.</p>';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>  
    <h1>HTML ET PHP</h1>

    <?php
    // Exercice 3:
    echo '<p>Ce texte est affiché depuis PHP</p>'
    ?>
</body>
</html>

<?php // Exercice: ?>
<!-- 2: La différence entre echo et print est minime

    3: echo accepte plusieurs arguments séparés par des virgules (exemple : echo "Coucou je m'appelle antoine","J'aimerais dire
        quelques mots" et ne retourne rien)
        
        print n'accepte qu'un argument (une erreur apparaitra si vous tentez de mettre une virgule après) et retourne toujours
        true (ce qui fait qu'on peut l'utiliser en valeur de variable par exemple : $vraioufaux = print "ceci est un test", la
        valeur de vraioufaux sera true (1));
    4: 
-->

<?php
// Exercice 5:
$personne = array('nom' => 'Abdel', 'age' => '20ans');

print_r($personne);
?>

<?php
// Exercice 6:
    $nombre = 2;
    $str = 'voiture';

    var_dump($nombre);
    var_dump($str);
?>

<?php
    // Exercice 7
    echo "Ceci est mon paragraphe <b>gras</b> en <i>italique</i> et <u>souligné</u>";
?>

<?php
// Exercice 8:
echo '<div><p>J\'ai 20 ans</p></div>'
?>

<?php // Exercice 9:?>
<h1>BMW</h1>
<h2>M5 CS</h2>

<p>L'ensemble fait de la BMW M5 2025 la plus puissante jamais produite avec ses 717 chevaux au total et son couple de 738 livres-pieds, 
    rien de moins. Un rouage intégral M xDrive est proposé de série ; la voiture peut ainsi boucler le sprint de 0 à 100 kilomètres/heure en 3,5 secondes environ,
    selon le constructeur.


<?php
    echo date("y-m-d") . "</p>"
?>

<?php
// Exercice 10:
$message = 'en formation';
echo '<h1>Abdel est ' .$message . '</h1>'
?>

<?php
    require 'partials/footer.php';
?>