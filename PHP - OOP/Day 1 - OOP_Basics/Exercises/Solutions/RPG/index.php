<?php

require_once 'Equipment.php';
require_once 'Character.php';

$legolas = new Character('Elf', 'Legolas');

echo '<pre>';
var_dump($legolas);
echo '</pre>';

$sword = new Equipment('Sword', 'Crazy Sword', 10, 0, 0);

echo '<pre>';
var_dump($sword);
echo '</pre>';

$legolas->setEquipment($sword);

echo '<pre>';
var_dump($legolas);
echo '</pre>';
