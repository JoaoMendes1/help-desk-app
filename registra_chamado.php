<?php

echo '<pre>';
    print_r($_POST);
echo '</pre>'; 
    //Montagem do texto 
    $titulo = str_replace('#', '-', $_POST['titulo']);
    $categoria = str_replace('#', '-', $_POST['categoria']);
    $descricao = str_replace('#', '-', $_POST['descricao']);

    //implode('#', $_POST);

    $texto = $titulo .' # '. $categoria .' # '. $descricao . PHP_EOL;
    //Abrindo o arquivo
    $arquivo = fopen('arquivo.hd', 'a');
    //Escrevendo o texto
    fwrite($arquivo, $texto);
    //Fechando o arquivo 
    fclose($arquivo);
    //echo $texto; 

    header('Location: abrir_chamado.php'); 

?>