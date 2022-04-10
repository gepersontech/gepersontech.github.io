<?php
    function rectangleArea($length, $width){
        return $length * $width;
    }

    function triangleArea($base, $heigth){
        return ($base * $heigth)/2;
    }

    function trapezoidArea($baseA, $baseB, $heigth){
        return (($baseA+$baseB)/2) * $heigth;
    }

    function circleArea($radius){
        return 3.14 * $radius * $radius;
    }

    function parallelogramArea($base, $heigth){
        return $base * $heigth;
    }
?>