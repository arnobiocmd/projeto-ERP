<?php

namespace app\models\validacao;

use app\core\Validacao;
use app\models\service\ProdutolocalizacaoService;

class ProdutolocalizacaoValidacao{
    public static function salvar($produto_localizacao){
        $validacao = new Validacao();

        $validacao->setData("id_produto",$produto_localizacao->id_produto);
        $validacao->setData("id_localizacao",$produto_localizacao->id_localizacao);

        $validacao->getData("id_produto")->isVazio();
        $validacao->getData("id_localizacao")->isVazio();

        if(!$produto_localizacao->id_produto_localizacao){
            $tem = ProdutolocalizacaoService::getProdutoLocalizacao($produto_localizacao->id_produto,$produto_localizacao->id_localizacao);
            if($tem){
                $validacao->getData('id_produto')->isUnico(1,'Já existe um produto com este local!');
            }
        }

        return $validacao;

    }
}