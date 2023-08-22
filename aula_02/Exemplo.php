<?php 


    // Public funciona em quualquer lugar.
    //Private só conseguimos acessar dentro da classe.

    class Exemplo {
        private $var1;
        public $var2;
        //public static $var3 = 'Joao';

        /*
        public function metodo(){

        }

        private function metodo2(){
            
        }
        */

        public function setVar1($var1) {
            $this->var1 = $var1;
        }

        public function pegaVar1(){
            return $this->var1;
        }
    }

?>