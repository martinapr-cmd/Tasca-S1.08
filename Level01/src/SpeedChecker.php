<?php

class SpeedChecker
{
    private int $speed;

    public function __construct(int $speed)
    {
        $this->speed = $speed;
    }

    public function getLevel(): string
    {
        if ($this->speed < 30) {
            return "Very slow";
        } else if ($this->speed <= 60) {
            return "Adequate speed";
        } else if ($this->speed <= 80) {
            return "Slight excess";
        } else if ($this->speed <= 100) {
            return "Moderate excess";
        } else {

            return "Severe excess";
        }
    }
}

