<?php
class Ubezpieczenie extends AutoZDodatkami{
	public $pierwszySamochod;
    public $liczbaLat;
   
    
    function __set($name, $value)
    {
        $this->$name = $value;
        return true;
    }

	function ObliczCene()
    {
         $ubezpiecznie = 10000 * $this->kurs_euro;
        if($this->pierwszySamochod == 0){
            $cena = parent::ObliczCene();
            $cena_auta = $ubezpiecznie - ((0.01 * $this->liczbaLat) * $cena);
            return $cena_auta;    
        }else{
           return  $ubezpiecznie;
        }
    }
}
?>