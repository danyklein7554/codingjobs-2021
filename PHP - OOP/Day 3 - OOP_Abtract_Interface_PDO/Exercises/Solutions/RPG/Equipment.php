<?php

class Equipment
{
    private $_type;
    private $_name;
    private $_bonusAtk;
    private $_bonusDef;
    private $_bonusLife;

    public function __construct($type, $name, $atk, $def, $life)
    {
        $this->_type = $type;
        $this->_name = $name;
        $this->_bonusAtk = $atk;
        $this->_bonusDef = $def;
        $this->_bonusLife = $life;
    }

    public function getType()
    {
        return strtolower($this->_type);
    }

    public function __toString()
    {
        return "Name : $this->_name<br>
        Type : $this->_type<br>
        Atk : $this->_bonusAtk<br>
        Def : $this->_bonusDef<br>
        Life : $this->_bonusLife";
    }
}
