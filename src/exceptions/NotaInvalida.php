<?php

    namespace src\exceptions; 

    //Ao extender uma exception, você torna uma classe como exception também
    class NotaInvalida extends \InvalidArgumentException{

        public function __construct(){
            parent::__construct("\nNota precisa estar entre 0 e 10.\n");
        }

    }