<?php

require_once __DIR__ . '/genre.php';

// Dichiarazione Classe e Istanze
 class Production{
    
    public $title;
    public $lang;
    public $vote ;
    public $genre ;


    // Costruttore
     function __construct( string $_title, string $_lang, int $_vote, Genre $_genre ){
        $this->title = ucfirst($_title);// metto la prima lettera maisucola
        $this->lang = ucfirst($_lang); // metto la prima lettera maisucola
        $this->setRate($_vote); 
        $this->genres = $_genre;
    }
    

    // Metodo vote - (Verifica se  la variabile  é un numero e setta il valore massimo del voto a 10 e lo divide per 2, =>
    // seno lancia un eccezione interrompendo il codice e lanciando un messaggio di errore per funzione non valida. )
    public function setRate(float $_vote){

        if($_vote <= 10 && $_vote > 0 &&is_numeric($_vote)){
            return $this->vote =  $_vote / 2;
        }else{
            throw new InvalidArgumentException("Il voto deve esserecompreso tra 0 e 10.");
        };
        
    }
};


