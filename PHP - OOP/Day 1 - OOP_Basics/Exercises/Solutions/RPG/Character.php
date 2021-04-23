<?php

class Character
{
    private $_name;
    private $_health;
    private $_attack;
    private $_defense;
    private $_warCry;
    private $_race;

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


    /*
		> A name
		> Health points (default 100)
		> Points of attack (default 10)
		> Defense points (default 5)
		> A war-cry (eg "Attaaaaaack!")
		> There are several types of characters: Humans, Orcs and Elves.


*/
}
