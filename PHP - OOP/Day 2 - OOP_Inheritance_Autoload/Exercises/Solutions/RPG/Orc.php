<?php

class Orc extends Adventurer
{

    public function __construct()
    {
        parent::__construct();
        $this->_warCry = 'wwouogrouroulou mlll !!';
    }

    public function attack($opponent)
    {
        if (get_class($opponent) == 'Elf' && $opponent->getShields() == 0) {
            $newLifePoints = $opponent->getLife() - 50;
        } else {
            $newLifePoints = $opponent->getLife() - $this->_atk;
        }
        $opponent->setLifePoints($newLifePoints);
    }

    public function usePower()
    {
        $this->_atk -= 10;
        $this->_def += 20;
    }
}
