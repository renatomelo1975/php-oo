<?php
// Classe do objeto: ou seja o nome do objeto
class Venda
{
    // Propriedades do objeto, o que vai conter neste objeto
    private $data;
    private $produto;
    private $quantidade;
    private $valorTotal;
    
//Método: o que este objeto pode fazer
//1o Método deste objeto
    public function __construct($data, $produto, $quantidade, $valorTotal)
    {
    $this->data = $data;
    $this->produto = $produto;
    $this->quantidade = $quantidade;
    $this->valorTotal = $valorTotal;
    }

    //Método obterVendas
    public function obterVendas()
    {
        return 'Relatório de Vendas' . "<br>"
         . 'Data: ' . $this->data . "<br>"
         . 'Produto: ' . $this->produto . "<br>"
         . 'Quantidade: ' . $this->quantidade . "<br>"
         . 'Valor: R$' . $this->valorTotal;
    }

}

//Instancia Venda, esse comando inicia a instancia
$vendas = new venda(
    '22/05/2022',
    'NoteBook Asus i3',
    '1',
    '2750.00'
);

//Comandos de imprimir na tela os dados nos objetos
//1o Comando var_dumb()
//var_dump($vendas);

//2o Comando echo
echo $vendas->obterVendas();
