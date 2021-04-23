<?php

class Equipment
{

    private $_type;
    private $_name;
    private $_bonusAtk;
    private $_bonusDef;
    private $_bonusHealth;

    public function __construct($type, $name, $atk, $def, $health)
    {
        $this->_type = $type;
        $this->_name = $name;
        $this->_bonusAtk = $atk;
        $this->_bonusDef = $def;
        $this->_bonusHealth = $health;
    }
}
