<?php
    
    include 'quadrado.php';
    global $akatsu;
    $akatsu = "Variável global";
    
    function altura($altura){
        
        static $total;
        
        $total += $altura;
       
        echo "Altura de $altura com o total de altura somado $total</br>";
        
    }
    
    //INSERÇÃO DO & JUNTO A VARIÁVEL ALTERA TAMBÉM O VALOR DELA ANTERIORMENTE
    function icrementa($variavel,$valor = 40){
        
        $variavel += $valor;
        return $variavel;  
        
    }
    
    //FUNÇÃO COM PARAMETROS INFINITOS, ELE FUNCIONA DINAMICAMENTE TOP DEMASIADO
    function ola(){
        
            $argumentos = func_get_args();
            $quantidade = func_num_args();
           
            
            for($i = 0; $i < $quantidade; $i++){
                
                echo "Olá : $argumentos[$i] </br>";
                
            }
        
        
        
    }
    
    function fatorial($numero){
        
        if($numero == 1)
        
            return $numero;
            
        else
        
            return $numero * fatorial($numero-1);
            
    }
    
    

?>