<?php

class Human extends Adventurer
{
    public function attack($opponent)
    {
        $bonus = 0;

        if (count($this->_inventory) == 0)
            $bonus = 3;

        $totalAtk = $this->_atk + $bonus;
        $newLifePoints = $opponent->getLife() - $totalAtk;
        $opponent->setLifePoints($newLifePoints);
    }

    public function usePower()
    {
        $this->_life += 20;
    }
}
