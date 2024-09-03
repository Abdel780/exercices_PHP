<?php
    require 'partials/head.php';
?>

<?php
// Exercice 1:
    $nom = 'Abdel';
    $prenom = 'Karim';

    echo "<p>$nom $prenom </p>"
?>

<?php
// Exercice 2:
    $phrase1 = 'Le ciel est ';
    $phrase2 = 'bleu aujourd\'hui';
    echo  '<p>' , $phrase1 , ' ' , $phrase2 , '</p>';
?>

<?php
// Exercice 3:
    $mot1 = 'J\'aime';
    $mot2 = 'le';
    $mot3 = 'PHP';
    echo  '<p>' , $mot1 , ' ' , $mot2 , ' ' , $mot3 , '</p>';
?>

<?php
    //Exercice 4:
    $texte = 'je vais ';
    $texte .= 'à la plage';
    echo "<p>$texte</p>"
?>

<?php
//Exercice 5:
$citation = 'Il a dit : "Le PHP est fantastique"';
echo "<p>$citation</p>"
?>

<?php
// Exerice 6:
$mot = 'PHP';
echo "<p>$mot</p>";
echo '<p>$mot</p>'
?>

<?php
//Exercice 7:
$nom = 'Abdel';
echo "<p>bonjour $nom, bienvenue sur notre site!</p>"
?>

<?php
//Exercice 8:
$citation = 'la vie est belle';
$citation .= ' surtout quand on code en PHP';
echo "<p>$citation</p>"
?>

<?php
//Exercice 9:
$a = '5';
$b = '10';
$total = $a + $b;
echo "<p> La somme de $a et $b est $total. </p>"
?>

<?php
    require 'partials/footer.php';
?>