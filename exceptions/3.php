<?php
//função valida ususario, se codigo, nome ou idade estiver vazio, ele retorna falso
function validarUsuario(array $usuario)
{
    if (empty($usuario['codigo']) || empty($çusuario['nome']) || empty($usuario['idade'])){
        throw new Exception("Campos obrigatórios não foram preenchidos!");
    }

    return true;
}

$usuario = [
    'codigo' => 1,
    'nome' => '',
    'idade' => 57,
];

validarUsuario($usuario);

echo "\n ... executando ...\n";
