<?php

namespace app\models\service;

use app\models\dao\ProdutoDao;
use app\models\validacao\ProdutoValidacao;
use app\util\UtilService;

class ProdutoService{
    public static function salvar($produto,$campo,$tabela){
        global $config_upload;
        $validacao = ProdutoValidacao::salvar($produto);
        if($_FILES["arquivo"]["name"]){
            $produto->imagem = UtilService::upload("arquivo", $config_upload);
            if(!$produto->imagem){
              return false;  
            }
        }  
        return Service::salvar($produto,$campo,$validacao->listaErros(),$tabela);
    }

    public static function atualizarEstoque($id_produto,$qtde){
        $dao = new ProdutoDao();
        return $dao->atualizarEstoque($id_produto,$qtde);
    }

    public static function listar($filtro){
        $dao = new ProdutoDao();
        return $dao->listar($filtro);
    }
}