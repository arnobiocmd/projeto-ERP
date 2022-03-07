<?php

namespace app\models\validacao;

use app\core\Validacao;

class ProdutoValidacao{
    public static function salvar($produto){
        $validacao = new Validacao();

        $validacao->setData("id_categoria",$produto->id_categoria);
        $validacao->setData("id_unidade",$produto->id_unidade);
        $validacao->setData("produto",$produto->produto);
        $validacao->setData("preco",$produto->preco);
        $validacao->setData("eh_produto",$produto->eh_produto);
        $validacao->setData("eh_insumo",$produto->eh_insumo);
        $validacao->setData("eh_promocao",$produto->eh_promocao);
        $validacao->setData("estoque_atual",$produto->estoque_atual);

        $validacao->getData("id_categoria")->isVazio();
        $validacao->getData("id_unidade")->isVazio();
        $validacao->getData("produto")->isVazio();
        $validacao->getData("preco")->isVazio();
        $validacao->getData("eh_produto")->isVazio();
        $validacao->getData("eh_insumo")->isVazio();
        $validacao->getData("eh_promocao")->isVazio();
        $validacao->getData("estoque_atual")->isVazio();
        
        return $validacao;
    }
}