<?php
$menu_data = array(
    'Accueil' =>'index.php',
    'Contact' => 'contact.php',
    'dasboard' => 'dasboard.php',
    'index' => 'index.php',
);
foreach ($menu_data as $nom => $url) {
    echo "<li><a href=\"$url\">$nom</a></li>";
}
?>
