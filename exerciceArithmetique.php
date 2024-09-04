<?php
    require 'partials/head.php';
?>  

    <h2>Exercice 1</h2>
<?php
    $a = 5;
    $b = 10;

    $total = $a + $b;
    echo "<p>$total</p>";
    
    $total =  $b - $a ;
    echo "<p>$total</p>";

    $total = $a * $b;
    echo "<p>$total</p>";

    $total = $a / $b;
    echo "<p>$total</p>";

    $total = $a % $b;
    echo "<p>$total</p>";
?>

    <h2>Exercice 2</h2>
<?php
    $a += $b;
    $a -= $b;
    $a *= $b;
    $a /= $b;
    $a %= $b;
?>

    <h2>Exercice 3</h2>
<?php
    $counter = 10;
    echo "<p>$counter</p>";
    ++$counter;
    echo "<p>$counter</p>";
    $counter = 10;
    echo "<p>$counter</p>";
    --$counter;
    echo "<p>$counter</p>";
?>

    <h2>Exercice 4</h2>
<?php
    $num = 10;
    echo "<p>$num</p>";
    $num++;
    echo "<p>$num</p>";
    $num = 10;
    echo "<p>$num</p>";
    $num--;
    echo "<p>$num</p>";
?>

    <h2>Exercice 5</h2>
<?php
    $age = 20;
    echo "<p>J'ai $age ans<p>";
    $age++;
    echo "<p>J'ai pris 1 ans donc j'ai mtn $age ans<p>";
    $age--;
    echo "<p>J'ai perdu 1 ans donc j'ai mtn $age ans<p>";
?>

    <h2>Exercice 6</h2>
<?php
    $note1 = 5;
    $note2 = 10;
    $note3 = 15;
    $moyenne = $note1 + $note2 + $note3 / 3;
    echo "<p>$moyenne</p>";
?>

    <h2>Exercice 7</h2>
<?php
    $total = 37;
    $resultat = ($total % 2 === 0) ? ' est pair<br>' : 'est impair <br>';
    echo "<p>$resultat</p>";
?>

    <h2>Exercice 8</h2>
<?php
    $quantity = 5;
    $quantity += 3;
    echo "<p> L'utilisateur ajoute 3 articles donc la quantité est mtn de $quantity</p>";
    $quantity -= 2;
    echo "<p> L'utilisateur retire 2 articles donc la quantité est mtn de $quantity</p>";
?>

    <h2>Exercice 9</h2>
<?php
    $kilometres = 100;
    $kilometres *= 0.621371;
    echo '<p>La valeur $kilometres est de 100km mais après convertion en miles le résultat est de ' . $kilometres . ' miles</p>';
    
    
?>

    <h2>Exercice 10</h2>
<?php
    $score = 50;
    $score += 10;
    echo "<p>J'ajoute 10 a score donc ca donne $score</p>";
    $score -= 5;
    echo "<p>Je retire 5 a score donc ca donne $score</p>";
?>
<?php
    require 'partials/footer.php';
?>  