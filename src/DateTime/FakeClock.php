<?php

namespace App\DateTime;

class FakeClock implements ClockInterface
{
    public function isNight()
    {
        return true;
    }

}