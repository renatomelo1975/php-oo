<?php
//função valida ususario, se codigo, nome ou idade estiver vazio, ele retorna falso
function validarUsuario(array $usuario)
{
    if (empty($usuario['codigo']) || empty($çusuario['nome']) || empty($usuario['idade'])){
        throw new Exception("Campos obrigatórios não foram preenchidos!\n");
    }

    return true;
}

$usuario = [
    'codigo' => 1,
    'nome' => '',
    'idade' => 57,
];

//Método try catch e finaly
try {
    $status = validarUsuario($usuario);
} catch (Exception $e) {
    echo $e->getMessage();
    return false;
}


echo "\n ... executando ...\n";
