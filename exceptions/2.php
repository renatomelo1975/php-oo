<?php
//função valida ususario, se codigo, nome ou idade estiver vazio, ele retorna falso
function validarUsuario(array $usuario)
{
    if (empty($usuario['codigo']) || empty($çusuario['nome']) || empty($usuario['idade'])){
        return false;
    }

    return true;
}

$usuario = [
    'codigo' => 1,
    'nome' => '',
    'idade' => 57,
];

//Chamada da função valida ususario
$usuarioValido = validarUsuario($usuario);

//Aqui é a mensagem se o usuario estiver invalido, codigo, nome ou idade vazio
if (!$usuarioValido) {
    echo "Usuário Invalido!";
    return false; //Aqui ele retorno falso para interromper o codigo
}

echo "\n ... executando ...\n";
