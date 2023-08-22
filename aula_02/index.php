<?php 

    include('Exemplo.php');
    //Instancia de Objeto
    $exemplo = new Exemplo();
    $exemplo->setVar1('Victor');
    echo $exemplo->pegaVar1();
    //$exemplo->var2 = 'Victor';
    echo '<hr />';
    $exemplo2 = new Exemplo();
    $exemplo2->setVar1('Joao');
    echo $exemplo2->pegaVar1();
    //$exemplo2->var2 = 'Joao';

    /*
    echo $exemplo->var2;
    echo '<br />';
    echo $exemplo2->var2;
    */

    //echo Exemplo::$var3;
?>