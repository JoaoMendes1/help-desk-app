<?php
    session_start();

    /*
    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';

    //Remover índices do array de sessão
    //unset() 

    session_destroy(); //será destruída 
    //Forçar um redirecionamento
    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';

    unset($_SESSION['x']); //para remover o índice apenas se existir

    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';

    // destruir a variável de sessão
    //session_destroy() - remove todos os índices contidos dentro da super global session 

    */

    session_destroy();
    header("Location: index.php");

?>