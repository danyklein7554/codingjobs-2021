<?php

require_once 'Equipment.php';
require_once 'Character.php';

$legolas = new Character('Elf', 'Legolas');
$orc = new Character('Orc', 'MyCharacter');

$sword = new Equipment('Sword', 'Death Sword', 10, 0, 0);
$shield = new Equipment('Shield', 'My own shield', 0, 20, 0);
$hammer = new Equipment('Hammer', 'My own hammer', 10, 5, 0);


echo $legolas->addEquipment($sword) . '<br>';
echo $legolas->addEquipment($sword) . '<br>';
echo $legolas->addEquipment($sword) . '<br>';
echo $legolas->addEquipment($shield) . '<br>';
echo $legolas->addEquipment($shield) . '<br>';
echo $legolas->removeEquipment($hammer) . '<br>';

echo '<hr>';
$legolas->displayEquipment();

echo '<pre>';
var_dump($legolas);
echo '</pre>';
