<?php 
    function addition(float $a,float $b): float{
        return $a + $b;
    }
    function soustraction(float $a,float $b): float{
        return $a - $b;
    }
    function multiplication(float $a,float $b): float{
        return $a * $b;
    }
    function division(float $a,float $b): float{
        return $a/$b;
    }
    function moyenne2nombre(float $nombre1, float $nombre2): float{
        return addition($nombre1,$nombre2)/2;
    }
    function estFemme(string $genre): bool{
        return $genre === "F";
    }
    function estAdulte(int $age): bool{
        return $age >= 18;
    }
    function ouiOuNon(string $phrase = null) : bool{
        while(true){
            $reponse = readline($phrase . " - (o)ui/(n)on : " );
            if($reponse ==="o"){
                return true;
            }elseif($reponse === "n"){
                return false;
            }
        }
    }

?>