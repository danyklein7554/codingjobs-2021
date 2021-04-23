<?php

class Adventurer
{
    // Properties
    protected $_name;
    protected $_life;
    protected $_atk;
    protected $_def;
    protected $_speed;

    protected $_warCry;

    // reference to an object
    protected $_inventory;

    public function __construct()
    {
        $this->_life = 100;
        $this->_atk = 10;
        $this->_def = 5;
        $this->_speed = 0;
        $this->_warCry = 'Attaaaaaaack!';
        $this->_inventory = array();
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

    // Count number of Shields
    public function getShields()
    {
        $shield = 0;

        foreach ($this->_inventory as $item) {
            if ($item->getType() === 'shield')
                $shield++;
        }

        return $shield;
    }

    // Count number of Swords
    public function getSwords()
    {
        $sword = 0;

        foreach ($this->_inventory as $item) {
            if ($item->getType() === 'sword')
                $sword++;
        }

        return $sword;
    }

    // getter
    public function getLife()
    {
        return $this->_life;
    }

    // Setters
    public function setLifePoints($newLifePts)
    {
        if ($newLifePts < 0)
            $this->_life = 0;
        else
            $this->_life = $newLifePts;
    }
}
