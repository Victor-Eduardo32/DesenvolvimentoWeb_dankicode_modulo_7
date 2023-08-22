<?php 

    class Filha {

        /*
        protected function funcaoTeste(){
            echo 'chamando função de teste';
        }
        */
        private function funcaoTeste(){
            echo 'chamando função de teste';
        }
        
        public function printHello(){
            $this->funcaoTeste();
            echo 'Hello World';
        }
        
    }

    class Pai extends Filha{
        public function printHello(){
            parent::printHello();
            echo '<br />';
            echo 'nova função';
        }
        public function mostrarTchau(){
            echo 'Tchau Mundo';
        }

    }
        

    $pai = new Pai();
    //$pai->mostrarTchau();
    $pai->printHello();

    $filha = new Filha();
    //$filha->printHello();


?>