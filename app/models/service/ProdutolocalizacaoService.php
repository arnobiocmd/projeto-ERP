<?php

namespace app\models\service;

use app\models\dao\ProdutolocalizacaoDao;
use app\models\validacao\ProdutolocalizacaoValidacao;

class ProdutolocalizacaoService{
    public static function lista(){
        $dao = new ProdutolocalizacaoDao();
        return $dao->lista();
    }

    public static function listaPorProduto($id_produto){
        $dao = new ProdutolocalizacaoDao();
        return $dao->listaPorProduto($id_produto);
    }

    public static function getProdutoLocalizacao($id_produto,$id_localizacao){
        $dao = new ProdutolocalizacaoDao();
        return $dao->getProdutoLocalizacao($id_produto,$id_localizacao);
    }


    public static function salvar($produto_localizacao,$campo,$tabela){
        $validacao = ProdutolocalizacaoValidacao::salvar($produto_localizacao);
        return Service::salvar($produto_localizacao,$campo,$validacao->listaErros(),$tabela);
    }

    public static function salvarMassa($id_localizacao,$tipo){
        if($tipo == "P"){
           $produtos = Service::get("produto","eh_produto","S",true);
        }else if($tipo == "I"){
            $produtos =   Service::get("produto","eh_insumo","S",true);
        }else{
            $produtos =  Service::lista("produto");
        }

        foreach($produtos  as $produto){
            if(!self::getProdutoLocalizacao($produto->id_produto,$id_localizacao)){
                Service::inserir(["id_produto"=>$produto->id_produto,"id_localizacao"=>$id_localizacao],"produto_localizacao");
            }
           
        }

      
    }

    public static function atualizarEstoque($id_produto,$id_localizacao,$qtde){
        $dao = new ProdutolocalizacaoDao();
        return $dao->atualizarEstoque($id_produto,$id_localizacao,$qtde);
    }
}