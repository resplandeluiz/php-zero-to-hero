
<?php
        echo "<meta charset='utf-8'>";
        echo '<pre>';
/* 

    Arquivo desenvolvido para realizar consultas e desenvolver minha habilidade em PHP.
    Criado com único e exclusivo objetivo de estudo.
    
    Criador : Luiz Manoel Resplande Oliveira
    Email : luizresplandeoliveira@gmail.com
    
    Link GIT : repository_link;
    
    Referência : PHP PROGRAMANDO COM ORIENTAÇAO A OBJETO / Pablo Dall'Oglio.
    
    Manual:
        
            Instalar algum servidor para o PHP. ex:Xampp
            Realizar as configurações básicas. ex: add este arquivo na pasta "htdocs".
            Para execução apenas descomente a linha e rode o arquivo, deverá funcionar e você já terá um exemplo de como funciona tal função.
            CTRL+F para procurar alguma função específica(Nosso INDEX ou SUMÁRIO).
            Comprem o LIVRO vale muito!
            Em caso de dúvidas nos comentário rode o código que deve ajudar, não sou muito bom em explicar algumas coisas.
            Espero ter ajudado, caso encontre algum erro, peço que me envie um email com a linha de erro ou equívoco nos comentários, afinal é apenas o que eu entendi do livro e acaba que todo mundo se ajuda.
            Valeu!
    

*/
    
    ### comandos para arquivos com PHP ##############################################
    
    
    //PS. CRIE O ARQUIVO "boasPatricas.txt :)"
    
    // $fp = fopen("boasPraticas.txt","r");
   
    
    // echo "$fp</br></br></br>";
    // echo "<pre>";
    // print_r(file("boasPraticas.txt"));
    
    ##ESCREVE O ARRAY DENTRO DO ARQUIVO
    // //echo file_put_contents("boasPraticas.txt",'GRavado com sucesso');
    //  fclose($fp);
     
     ##ABRE O ARQUIVO E SALVA EM UMA VARIÁVEL
    //  $arquivo = file("boasPraticas.txt");
    //  print_r($arquivo);
    
    // //// PAGE 53
    
    
    // $origem = "boasPraticas.txt";
    // $destino = "boasPraticas2.txt";
    
    
    //COPIA O ARQUIVO ###########################################################
    //  if( copy($origem,$destino) )
    //      echo "Copiado com sucesso!";
    //  else
    //      echo "Erro na execução da cópia";
        
    //RENOMEIA O ARQUIVO ###########################################################
    //  if( rename("ShurengolMolengouls.txt",$origem) )    
    //      echo "Renomeado com sucesso!";
    //  else
    //      echo "Erro na execução da renomeação";
    
    //EXCLUI O ARQUIVO ###########################################################
    //    if(unlink($destino))
    //        echo "$destino excluído com sucesso";
    //    else
    //        echo "Erro ao tentar excluir o arquivo $destino";
    
    //VERIFICA A EXISTÊNCIA DO ARQUIVO ###########################################################
    //  if(file_exists($destino))
    //      echo "O Arquivo $destino existe";
    //  else
    //      echo "O Arquivo $destino não existe";
    
    //VERIFICA A LOCALIZAÇÃO DO ARQUIVO ###########################################################
    //  if(is_file($destino))
    //      echo "O $destino existe";
    //  else
    //    echo "O $destino não é um arquivo";
    
    //CRIA UM DIRETÓRIO ###########################################################
    //   $folder = "pastaX";
    
    //  if(mkdir($folder,0777))
    //    echo "$folder criada com sucesso!";
    //  else
    //    echo "$folder não criado!";
    
    //RETORNA O DIRETÓRIO ATUAL ###########################################################
    //echo "O diretório atual é :".getcwd();
    
    //TROCA O DIRETÓRIO ###########################################################
    //  echo "O diretório atual é :".getcwd();
    //  chdir("../git");
    //  echo "O diretório atual é :".getcwd();
    
    //APAGA UM DIRETÓRIO ###########################################################
    //  if(rmdir($folder))
    //      echo "$folder apagado com sucesso";
    // else
    //      echo "$folder não apagdo";
    
    
    //ABRE UM DIRETORIO ###########################################################
    //$diretorio = opendir("../git");
    //echo $x;
    
    //LIBERA O RESCURSO ALOCADO PARA EXECUTAR O opendir() ###########################################################
   // echo closedir($diretorio);
   
    //Realiza a leitura do conteúdo do diretório aberto pelo  opendir() ###########################################################
    // if(is_dir("../git/Arduino")){
        
    //     $ident = opendir("../git/Arduino");
    //     while ($arquivo = readdir($ident)){
            
    //         echo $arquivo."</br>";
            
    //     }
    //     closedir($ident);
        
    // }
    
    
    
    
    ### manipulação de String com PHP ##############################################
    
    
    //ASPAS DUPLAS ELE ENTENDE COMO VARIÁVEL, CASO COLOQUE ASPAS SIMPLES ELE VAI ENTENDER O VALOR LITERAL  ##############################################
    
    //$fruta = "maça";
    //print "Como $fruta</br>";
    //print 'Como $fruta';
    
    //Declarar uma String literal e definir uma chave para início e fim neste caso CHAVE  ##############################################
    //A IDENTAÇÃO INFLUENCIOU NA EXECUÇÃO FINAL DO CÓDIGO, O PORQUE EU NÃO SEI MAS IFLUENCIOU  ##############################################
    
//     echo "<pre>";
    
// $str = <<<CHAVE
            
//                 Cinco patinhos foram passear
//                     Além das montanhas
//                         Para brincar
//                             A mamãe gritou: Quá, quá, quá, quá
//                                 Mas só quatro patinhos voltaram de lá.
// CHAVE;
    
//     echo $str;


    //CONCATENAÇÃO  ##############################################
    
    //$fruta = "maça";
    
    //forma1  ##############################################
    //    echo $fruta.'é a fruta de Eva</br>';
    
    //forma2  ##############################################
    //    echo "{$fruta} é a fruta de Eva</br>";
    
    //forma3 - 2 sem as chaves também funciona  ##############################################
    //    echo "$fruta é a fruta de Eva";
    
    
    //PHP realiza automaticamente a conversão entre tipo  ##############################################
    //$exemplo = 1234;
    
    //CONVERTER O int acima em String e imprime como String  ##############################################
    //echo 'O salário é '.$exemplo.'</br>';
    //echo "O salário é  $exemplo";
    
    

    //CARACTERES DE ESCAPE  ##############################################
    
        // \n  <<< Pula linha
        //  \r <<< Procunrando a definição mais interessante, mas é meio que um voltar a linha ele dar espaçoa quando inserido no meio de uma String.
        //  \t <<< Tabulação
        //  \  <<< Barra invertidade
        //  \" <<< Aspas duplas
        //  \$ <<< Símbolo de $
        
        
        
    ## ASPAS DUPLAS SOMENTE QUANDO NECESSÁRIO AVALIAR SEU CONTEÚDO, EVITANDO TEMPO DE PROCESSAMENTO
    
    
    //FUNÇÕES__string  ##############################################
    
    ## TRANFORMA O TEXTO EM MAIÚSCULO
    //echo strtoupper("tranforma o texto todo em maiusculo");
    
    
    ## TRANFORMA O TEXTO EM MINÚSCULO
    //echo strtolower("TRANFORMA O TEXTO TODO EM MINUSCULO");
    
    
    
    ## Retorna parte de uma String que é passada como parâmetro, o número diz a partir de qual parte você que que ele retorne
    ## número positivo ele conta e retorna a partir do numero digitado
    ## número negativo e começar pelo fim da String e trás o resultado de tras para frente
    
    //$texto = "Luiz Manoel Resplande";
    //echo substr($texto,5);
    //echo "</br>";
    //echo substr($texto,-5);
    
    
    ## Preenche uma string com outra string com um tamanho especifico
    
    //$texto = "São Paulo FC";
    //echo  str_pad($texto,50,"A",STR_PAD_LEFT);  ##ACRESCENTA A ESQUERDA
    //echo "</br>";
    //echo  str_pad($texto,51,"A",STR_PAD_BOTH);  ##Distribui a string entre os dois lados 
    //echo "</br>";
    //echo  str_pad($texto,50,"A",STR_PAD_RIGHT);  ##ACRESCENTA A DIREITA
    
    ## Caso queira repetir a String
    
    //$texto = "São Paulo o único Tri-Mundial brasileiro!";
   // echo str_repeat($texto.'</br>',3);
    
    ## Caso queira saber o tamanho de uma String
       
    //$texto = "Time mais embaçado do Planeta";
    //echo 'O tamanhao da String é : '.strlen($texto);
    
    ##SUBSTITUI A STRING POR OUTRA EM UM DADO CONTEXTO
    
    //$texto = "2005,2006,2007 tri-brasileiro";
   // echo str_replace('tri-brasileiro','São Paulo',$texto); ## (PROCURA, SUBSTITUI, STRING UTILIZADA)
   
   ## Encontra a primeira occorencia de uma String dentro de outra
   
    //$meu_texto = "Sao Paulo tri mundial, hexa brasileiro";
   // $palavra = "mundial";
    
   // $posicao =  strpos($meu_texto,$palavra);
   
   // if($posicao)
   //     echo "String encontrada na $posicao ";
   // else
   //     echo "String não encontrada";
        
    
    
   //Manipulação de Array[]  ############################################## PAGE 65
   
    // Criando um Array[] ##############################################
    
    //Forma 1 
    //$esportes = array('futebol','volei','futvolei','basquete','atletismo');
 
    //Forma 2
    //$esportes = array(0=>'futebol',1=>'volei',2=>'futvolei',3=>'basquete',4=>'atletismo');
    
    //Forma 3
    //$esportes[] = 'futebol';
    //$esportes[] = 'volei';
    //$esportes[] = 'futvolei';
    //$esportes[] = 'basquete';
    //$esportes[] = 'atletismo';
    
    
    //Para acessar um dado específico basta apenas indicar o índice
    //echo $esportes[0].'</br>';
    //echo $esportes[1].'</br>';
    //echo $esportes[2];
    
    
     // Arrays[] associativos ##############################################
    
    //$esportes = array('futebol'=>'Bola de Futebol','volei'=>'Bola de Volei','basquete'=>'Bola de Basquete');
    
    // Acessar um Array associativo ##############################################
    //echo $esportes[volei];
     
     // Iteração array com o foreach ##############################################
     
    //foreach($esportes as $esporte => $chave){
         
         //echo $esporte.' => '.$chave.'</br>';
         
    // }
     
     // Acesso aos Array[] ################################################
     
     //ATRIBUINDO
     //$meu_tenis['tamanho'] = 43;
     //$meu_tenis['cor'] = 'Marrom';
     
     //ALTERANDO
     //$meu_tenis['tamanho'] = 42;
     //$meu_tenis['cor'] = 'Cinza';
     
     //EXIBINDO
     //echo '</br>';
     //var_dump($meu_tenis);
     
     //ATRIBUINDO
     //$mochila[] = 'Adidas';
     //$mochila[] = 'Nike';
     
     //ALTERANDO
     //$mochila[0] = 'Puma';
     
     //EXIBINDO
     //echo '</br>';
     //var_dump($mochila);
     
     
     // Array Multimensionais ##################################################
     
     
    //Forma 1 - criação - atribuição
    // $pizzas = array(
    //     'Portuguesa'=>array('150g de queijo mussarela','50g de presunto','1 tomate em rodelas','1 ovo cozido'),
    //     'Calabresa'=>array('150g de queijo mussarela','2 gomos de linguiça calabresa','12 azeites verdes','orégano'),
    // );
    
    
   
    //Forma 2 - criação - atribuição
    // $pizzas['Portugesa'][0] = '150g de queijo mussarela';
    // $pizzas['Portugesa'][1] = '50g de presunto';
    
    
    //Forma 3 - criação - atribuição
    //$pizzas['Portugesa']['Igrediente 1'] = '150g de queijo mussarela';
    //$pizzas['Portugesa']['Igrediente 2'] = '50g de presunto';
    
    //print_r($pizzas);

   // Iteração Array[] com o foreach ##############################################
     
    // foreach($pizzas as $pizza => $ingredientes){
         
    //      foreach($ingredientes as $igrediente){
            
    //         print_r($pizza);
    //         print_r($ingredientes);
            
    //      }
         
         
    // }
    
    // Funções com Array[] ##############################################
    
    //Adicionar elementos no final do Array[]  ##############################################
    // $garrafas = array('350ml','600ml','2L','2,5L','3L');
    // print_r($garrafas);
    
    // array_push($garrafas,'5L');
    // print_r($garrafas);
    
    //Remove  elementos no final do Array[]  ##############################################
    // $garrafas = array('350ml','600ml','2L','2,5L','3L');
    // array_pop($garrafas);
    // print_r($garrafas);
    
    //Remove  elementos no inicio do Array[]  ##############################################
    //  $garrafas = array('350ml','600ml','2L','2,5L','3L');
    //  array_shift($garrafas);
    //  print_r($garrafas);
    
    //Adiciona  elementos no inicio do Array[]  ##############################################
    // $garrafas = array('350ml','600ml','2L','2,5L','3L');
    // array_unshift($garrafas,'210ml');
    // print_r($garrafas);
    
    //Preenche o Array[] com um valor, determinada posições você diz quantas posições seu Array[]  ##############################################
    //ex se você colocar 22 ele vai inserir o valor determinado até fechar as 22 posições ##############################################
    //$garrafas = array('350ml','600ml','2L','2,5L','3L');
    //$garrafas = array_pad($garrafas,22,'210ml');
    //print_r($garrafas);
    
    //Retorna o  Array[] invertido             ##############################################
    //$garrafas = array('350ml','600ml','2L','2,5L','3L');
    //$garrafas = array_reverse($garrafas);
    //print_r($garrafas);
    
    //Retorna o  Array[] invertido             ##############################################
    //$garrafas = array('350ml','600ml','2L','2,5L','3L');
    //$garrafas = array_reverse($garrafas);
    //print_r($garrafas);
    
    //Mescla  Array[]'s             ##############################################
    //$garrafas = array('350ml','600ml','2L');
    // $garrafas2 = array('2,5L','3L');
    // $garrafas_total = array_merge($garrafas,$garrafas2);
    // print_r($garrafas_total);
    
    //Array[]'s  keys  - Retorna as chaves de um array         ##############################################
    
    // $pizzas = array(
    //     'Portuguesa'=>array('150g de queijo mussarela','50g de presunto','1 tomate em rodelas','1 ovo cozido'),
    //     'Calabresa'=>array('150g de queijo mussarela','2 gomos de linguiça calabresa','12 azeites verdes','orégano'),
    //  );
    
    // $indices = array_keys($pizzas);
    // print_r($indices);
    
    
    
 
?>