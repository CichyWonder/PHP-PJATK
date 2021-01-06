<?php

class NoweAuto
{
    public $model_auta;
    public $cena_euro;
    public $kurs_euro;

    function __construct($model_auta,$cena_euro,$kurs_euro)
    {
        $this->model_auta = $model_auta;
        $this->cena_euro = $cena_euro;
        $this->kurs_euro = $kurs_euro;
    }

    function ObliczCene()
    {
        $cena=$this->cena_euro * $this->kurs_euro;
        return $cena;
    }   
}
?>