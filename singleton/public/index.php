<?php
require('../vendor/autoload.php');



# TODO: Récuperer une instance de Config
# Afficher une valeur contenu dans config.php
# Récupérer une seconde instance de Config et vérifié que les deux instances sont identiques

$config1 = App\Config::getInstance();
echo "API Key from cnfg:  " . $config1->get('apiKey') . "<br/>";
$config2 = App\Config::getInstance();
if ($config1 === $config2) {
    echo "Both instances are the same (Singleton works)";
} else {
    echo "Instances are different (Singleton failed)";
}
