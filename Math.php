<?php

Class Math {

    public function sum(array $array) {
        $res = 0;
        foreach($array as $a) {
            $res += $a;
        }
        return $res;
    }
    
    public function sub(array $array) {
        $res = 0;
        foreach($array as $a) {
            $res -= $a;
        }
        return $res;
    }
    
    public function mult(array $array) {
        $res = 1;
        foreach($array as $a) {
            $res *= $a;
        }
        return $res;
    }
    
    public function div(float $a, float $b) {
        try{
            $res = $a / $b;
        }
        catch(DivisionByZeroError $e) {
            return 'Error: ' . $e->getMessage();
        }
        return $res;
    }
}