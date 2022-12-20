<?php

include_once __DIR__ . './prodotto.php';

class Dvd extends Prodotto{
    public $durata;
    public $formato;

    public function __construct(
        String $nome,
        String $autore,
        Float $prezzo,
        Generi $generi,
        Bool $pubblicato,
        String $immagine,

        float $durata,
        String $formato
    )
    {
        $this->durata = $durata;
        $this->formata = $formato;
        parent::__construct($nome,$autore,$prezzo,$generi,$pubblicato,$immagine );
    }
}

?>