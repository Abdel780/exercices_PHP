<?php
    require 'partials/head.php';
?>
    
<?php
// Exercice 1:
define('PI', '3.14159');
echo '<p>' .PI. '</p>';
?>

<?php
// Exercice 2:
define('LARGEUR',50);
define('LONGUEUR', 100);
echo '<p>' . LARGEUR * LONGUEUR .'</p>';
?>

<?php
//Exercice 3:
echo __FILE__ ;
?>

<?php
//Exercice 4:
define('PREFIX','Bonjour');
$a = ' tout';
$b = ' le';
$c = ' monde.';
echo '<p>' . PREFIX . " $a $b $c </p>";
?>

<?php
//Exercice 5:
define("SUJET", "La France");
    $capital = "Paris";

    echo '<p> La capital de ' . SUJET . ' est ' . $capital . '</p>';
?>

<?php
//Exercice 6:
define('TAUX_TVA', 0.2);
$prix_ht = 100;
$prix_ttc = $prix_ht + ($prix_ht * TAUX_TVA);
echo "<p>Le prix TTC est :  $prix_ttc  €</p>";
?>

<?php
//Exercice 7:
define('EURO_VERS_USD',1.2);
$euros = 100;
$total = $euros * EURO_VERS_USD;
echo "<p>$total</p>";
?>

<?php
//Exercice 8:
define('SEUIL',10);
$nbr = 8;

if($nbr < SEUIL){
    echo "<p>Le nombre $nbr est plus petit que" . SEUIL . '</p>';
}else{
    echo "<p>Le nombre $nbr est plus grand que " . SEUIL . '</p>';
}
?>

<?php
//Exercice 9:
define('URL_SITE', 'https://fsalah.ma6tvacoder.org/');

$chemin = '#propos';
$cheminComplet = URL_SITE . $chemin;

echo "<button type='button' class='btn btn-warning'>
<a style='text-decoration: none' class='text-dark' href='$cheminComplet'>The best site</a>
</button>"  
?>

<?php
//Exercice 10:
define('AGE_LEGAL', 18);
$age = random_int(0,99);

if ($age >= AGE_LEGAL) {
    echo "<p>Tu as $age ans donc t'as plus de " . AGE_LEGAL . ' mais je pense que tu le sais</p>';
}else{
    echo "<p>Tu as $age ans donc t'as moins de " . AGE_LEGAL . ' mais je pense que tu le sais</p>';;
}
?>

<?php
    require 'partials/footer.php';
?>