<?php

    session_start();

//VARIÁVEL QUE VERIFICA SE A AUTENTICAÇÃO FOI REALIZADA
$usuario_autenticado = false;

// ----- USUÁRIOS DO SISTEMA --------
$usuario_app = array(
    array('email' => 'adm@teste.com.br', 'senha' => '123456'),
    array('email' => 'user@teste.com.br','senha' => 'abcd'),
);  

foreach($usuario_app as $user) {

    if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
        $usuario_autenticado = true;
    }
}

if($usuario_autenticado) {
    echo 'Usuário autenticado';
    echo '<script>alert("Usuário autenticado!");</script>';
} else {
   header('Location: index.php?login=erro');
   echo '<script>alert("Erro na autenticação");</script>'; 
}

/*
print_r($_GET)

echo '<br />'
echo $_GET['email']
echo '<br />'
echo $_GET['senha']
print_r($_POST);
*/

?>