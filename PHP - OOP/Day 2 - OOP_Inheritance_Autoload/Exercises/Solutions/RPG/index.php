<?php

require_once 'Adventurer.php';
require_once 'Equipment.php';
require_once 'Orc.php';
require_once 'Elf.php';
require_once 'Human.php';

$legolas = new Elf();
$orc = new Orc();

$sword = new Equipment('Sword', 'Death Sword', 10, 0, 0);
$shield = new Equipment('Shield', 'My own shield', 0, 20, 0);

echo $legolas->addEquipment($sword) . '<br>';
echo $legolas->addEquipment($shield) . '<br>';

echo '<hr>';
$legolas->attack($orc);

$orc->attack($legolas);

echo '<pre>';
var_dump($legolas);
echo '</pre>';

echo '<pre>';
var_dump($orc);
echo '</pre>';

// echo '<pre>';
// var_dump($sword);
// echo '</pre>';

echo '<hr>';

$adv = new Adventurer();
var_dump($adv);
