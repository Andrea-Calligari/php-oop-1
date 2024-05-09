<?php
// Dichiarazione Classe e Istanze
 class Production{
    public $title;
    public $lang;
    public $vote ;


    // Costruttore
     function __construct( string $_title, string $_lang, int $_vote ){
        $this->title = ucfirst($_title);
        $this->lang = ucfirst($_lang); 
        $this->setRate($_vote); 
    }
    

    // Metodo vote - (Verifica se  la variabile  é un numero e setta il valore massimo del voto a 10 e lo divide per 2, =>
    // seno lancia un eccezione interrompendo il codice e lanciando un messaggio di errore per funzione non valida. )
    public function setRate(float $_vote){

        if($_vote <= 10 && is_numeric($_vote)){
            return $this->vote =  $_vote / 2;
        }else{
            throw new InvalidArgumentException("Il voto deve essere maggiore o uguale a 10.");
        };
        
    }
};


// Creando Istanze della Classe Product assegnando dei valori come da costruttore

$enterTheVoid = new Production('enter the void', 'English', 10);
$requiemForaDream = new Production('requiem for a dream', 'English', 10);
//  var_dump($requiemForaDream );

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class="bg-warning">
    <header>
        
    </header>
    <main>
        <section class="py-5">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-4">
                        <div class="card">
                            <div class="card-header ">
                            <img class="card-img"src="https://th.bing.com/th/id/R.e26676b6d80af4218ba4ae9762aa5fe0?rik=w1JzSB6te2SS0g&pid=ImgRaw&r=0" alt="">
                            </div>
                            <div class="card-body ">
                                <ul class="list-unstyled ">
                                    <li>                                  
                                        Titolo:  <h4><?php echo $enterTheVoid->title; ?></h4> 
                                    </li>
                                    <li>
                                         Lingua:  <h4><?php echo $enterTheVoid->lang; ?></h4>                                     
                                    </li>
                                    <li>
                                        Voto:  <h4><?php echo $enterTheVoid->vote; ?></h4>                                
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card">
                            <div class="card-header ">
                            <img class="card-img"src="https://th.bing.com/th/id/R.3f6edd674da06774f80fdf5cf11bc59c?rik=Y0hTvYs9T2tWQw&pid=ImgRaw&r=0" alt="">
                            </div>
                            <div class="card-body ">
                                <ul class="list-unstyled ">
                                    <li>                                  
                                        Titolo:  <h4><?php echo $requiemForaDream->title; ?></h4> 
                                    </li>
                                    <li>
                                         Lingua:  <h4><?php echo $requiemForaDream->lang; ?></h4>                                     
                                    </li>
                                    <li>
                                        Voto:  <h4><?php echo $requiemForaDream->vote; ?></h4>                                
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
    </main>

    

</body>
</html>
<style>
    img{
        width: 100%;
        display: block;
    }
</style>