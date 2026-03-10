<?php
require('../vendor/autoload.php');

use App\MySQLQueryBuilder;
$queryBuilder = new MySQLQueryBuilder();

$query = $queryBuilder
    ->table('users')
    ->select(['id', 'name', 'email'])
    ->where('nom = "test"')
    ->where('age > 18')
    ->build();
echo $query;

# TODO: Creer un QueryBuilder
# Ecrire une requête en chainant des methodes
# Afficher la requête