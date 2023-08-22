<?php 

    abstract class Teste{
        public function func1(){
            echo 'chamando função 1';
        }

        abstract function func2();
    }

    class Principal extends Teste{
        public function func2(){
            echo 'estou declarando oficialmente um método abstrato';
        }

        public static function metodoestatico(){
            echo 'método estatico';
        }

        public function funcao(){
            //Principal::metodoestatico();
            Principal2::outroMetodoEstatico();
            //self::metodoestatico();
        }
    }

    class Principal2{
        public static function outroMetodoEstatico(){
            echo 'meu outro metodo';
        }
    }

    $principal = new Principal();
    $principal->funcao();
    //$principal->func1();
    //$principal->func2();
?>