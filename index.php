<?php
 class Production{
    public $title;
    public $lang;
    public $vote;

     function __construct( string $_title, string $_lang, int $_vote){
        $this->getTitle($_title);
        $this->lang = $_lang;
        $this->getRate($_vote);   
    }
    public function getTitle($_title){
       return $this->title = strtoupper($_title);
    }
    public function getRate( $_vote){
        if($_vote <= 10){

            return $this->vote = $_vote / 2;
        }else{
             echo "Error <br> Il voto massimo deve essere 10!";
           
        }


    }
}

$film1 = new Production('Enter the Void', 'English', 10);
$film2 = new Production('requiem for a Dream', 'English', 100);
var_dump($film2);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php ?></h1>
    

</body>
</html>
