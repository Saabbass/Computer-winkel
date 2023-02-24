<?php


echo "Hier komt een overzicht van alle fabrikanten";

require 'database.php';

//de sql query
$sql = "SELECT * FROM manufacturers";

//hier wordt de query uitgevoerd met de database
$result = mysqli_query($conn,$sql);

/**
 * Hier wordt het resultaat ($result) omgezet
 * in een *multidimensionale associatieve array
 * in dit voorbeeld staat $all_users maar dit mag
 * voor bijvoorbeeld producten $all_products heten.
 * Maar dit kies je zelf
 */
$fabrikanten = mysqli_fetch_all($result, MYSQLI_ASSOC);



/**
 * Hier loop (iterate) je over alle waardes die gevonden zijn.
 * Je kunt zoals je zien paragraaf-tags gebruiken
 * maar je kunt ook andere HTML-**tags** gebruiken
 */
?>
<?php foreach($fabrikanten as $fabrikant): ?>
  <p><?php echo $fabrikant["name"] ?></p>
<?php endforeach; ?>
