<?php

require "src/GunBallMachine.php";

class GunBallMachineTest extends \PHPUnit_Framework_TestCase
{
    public $gunBallMachineInstance;

    public function setUp()
    {
        $this->gunBallMachineInstance = new GunBallMachine();
    }

    public function testIfWheelWorks()
    {
        $this->gunBallMachineInstance->setGunBalls(100);
        $this->gunBallMachineInstance->spinWheel();


        $this->assertTrue(99 === $this->gunBallMachineInstance->getGunBalls());
    }
}