<?php

require_once('dog.php');
require_once('cat.php');

$cat = new cat('猫', 'オス');

echo '<br><br>';

echo $cat->animal.'だよ';
echo '<br><br>';

echo $cat->bilingual();

echo '<br><br>';


