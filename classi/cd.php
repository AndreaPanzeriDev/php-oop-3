<?php

include_once __DIR__ . './prodotto.php';

class Cd extends Prodotto{
    public $traccia;

    public function __construct(
        String $nome,
        String $autore,
        Float $prezzo,
        Generi $generi,
        Bool $pubblicato,
        String $immagine,


        //own
        Int $traccia
    )
    {
        $this->$traccia;
        parent::__construct($nome,$autore,$prezzo,$generi,$pubblicato,$immagine );
    }
}
