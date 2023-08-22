<?php 

    include('interface.php');

    class teste implements Interface1{
        public function printOnScreen($par){
            echo $par;
        }
    }


    $teste = new teste();
    $teste->printOnScreen('Olá Mundo');
?>