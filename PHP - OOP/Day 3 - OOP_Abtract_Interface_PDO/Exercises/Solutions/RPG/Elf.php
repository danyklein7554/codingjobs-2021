<?php

class Elf extends Adventurer
{
    public function attack($opponent)
    {
        $swords = $this->getSwords();
        $bonus = 2 * $swords;
        $totalAtk = $this->_atk + $bonus;

        $newLifePoints = $opponent->getLife() - $totalAtk;

        $opponent->setLifePoints($newLifePoints);
    }

    public function usePower()
    {
        $this->_speed += 3;
    }
}
