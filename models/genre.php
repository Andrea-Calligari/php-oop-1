<?php
class Genre {
    public $name;
   



    function __construct(  string $_name, ){ 
        $this->name = ucfirst($_name);
        

    }
        public function setName(){
            return $this->name;
        }
      

}