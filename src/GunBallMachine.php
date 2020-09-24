<?php


class GunBallMachine
{
    private $gunballs;

    public function getGunBalls()
    {
        return $this->gunballs;
    }

    public function setGunBalls($gunballs)
    {
        $this->gunballs = $gunballs;
    }

    public function spinWheel()
    {
        return $this->setGunBalls($this->gunballs - 1);
    }
}