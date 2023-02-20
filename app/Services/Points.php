<?php


namespace App\Services;


class Points
{
    public static function calculate($points)
    {
        $value = 0;

        if($points>900) {
            $value = $points*0.7;
        }

        if($points>600&&$points<901) {
            $value = $points*0.5;
        }

        if($points>300&&$points<601) {
            $value = $points*0.3;
        }

        if($points<301) {
            $value = $points*0.1;
        }

        return $value;
    }
}
