<?php 

function direBonjour(): void
{
    echo "<h1>Bonjour</h1>";
}

function direBonjourAqui(string $nom): string
{
    return "<p>Bonjour $nom</p>";
}

direBonjour();
direBonjour();

echo direBonjourAqui('Toto');

$bonjour = direBonjourAqui('Titi');
echo $bonjour;

$prenom  = "Bastian";

echo direBonjourAqui($prenom);

$nom = "Mike";

echo "<p>Bonjour $nom</p>";

echo '<p>Bonjour ' . $nom . '</p';

require 'footer.php';