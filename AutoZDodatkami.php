<?php
//require_once("NoweAuto.php");
class AutoZDodatkami extends NoweAuto
{
    public $alarm = 0 ;
    public $radioodtwarzacz = 0;
    public $klimatyzacja = 0;

    function __set($name, $value)
    {
      $this->$name=$value;
      return true;
    }

    function ObliczCene()
    {
        //echo $this->kurs_euro."<br>";
        
        $cena = parent::ObliczCene();
       // echo $cena."<br>";
        $cena_zdodatkami = ($this->alarm * $this->kurs_euro) + ($this->radioodtwarzacz * $this->kurs_euro) + 
                            ($this->klimatyzacja * $this->kurs_euro) + $cena;
        return $cena_zdodatkami;                      
    }
}
?>