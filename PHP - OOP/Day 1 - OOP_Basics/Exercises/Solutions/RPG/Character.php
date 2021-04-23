<?php

class Character
{
    private $_name;
    private $_health;
    private $_attack;
    private $_defense;
    private $_warCry;
    private $_race;

    // reference to an equipment
    private $_equipment;

    public function __construct($race, $name)
    {
        $this->_name = $name;
        $this->_health = 100;
        $this->_attack = 10;
        $this->_defense = 5;
        $this->setRace($race);
        $this->setWarCry();
    }

    public function setRace($race)
    {
        if ($race == 'Orc' || $race == 'Human' || $race = 'Elf') {
            $this->_race = $race;
        } else {
            echo 'Choose among Orc, Human or Elf';
        }
    }

    public function setWarCry()
    {
        if ($this->_race == 'Orc')
            $this->_warCry = "wwouogrouroulou mlll !!";
        else
            $this->_warCry = "Attaaaaaack!";
    }


    public function setEquipment($equipment)
    {
        $this->_equipment = $equipment;
    }

    // Equipment methods
    public function addEquipment($equipment)
    {
        // Check if there is enough space left
        if (count($this->_inventory) < 4) {

            // Loop the inventory to count swords and armor
            $swords = 0;
            $shield = 0;
            foreach ($this->_inventory as $item) {

                if ($item->getType() == 'sword')
                    $swords++;

                if ($item->getType() == 'shield')
                    $shield++;
            }

            // If it's a sword
            if ($equipment->getType() == 'sword' && $swords >= 2)
                return 'You already have 2 swords';

            if ($equipment->getType() == 'shield' && $shield == 1)
                return 'You already have a shield';

            // I can equip if I reach this line of code
            $this->_inventory[] = $equipment;
            return 'Equiped!';
        } else {
            return 'You already have 4 items';
        }
    }

    public function removeEquipment($equipment)
    {
        foreach ($this->_inventory as $pos => $item) {
            if ($item === $equipment) {
                unset($this->_inventory[$pos]);
                return 'Item removed';
            }
        }

        return 'Item couldnt be removed';
    }

    public function displayEquipment()
    {
        foreach ($this->_inventory as $item) {
            echo $item . '<br>';
        }
    }
}
