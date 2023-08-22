<?php 

    class Pessoa{

        //Objeto Pessoa
        private $nome = 'Victor';
        private $idade = '18';
        private $peso = '69kg';

        public function crescer(){
            $this->comer();
            echo 'estou crescendo';
        }

        private function comer(){
            echo 'estou comendo';
        }

    }

    //Instanciar
    $pessoa = new Pessoa;
    $pessoa2 = new Pessoa;

    $pessoa->crescer();
?>