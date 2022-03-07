<?php
namespace app\models\service;

use app\models\dao\MovimentoDao;
use app\models\entidade\Movimento;

class MovimentoService{
    public static function filtro($filtro){
        $dao = new MovimentoDao();
        return $dao->filtro($filtro);
    } 

    public static function lista($limit = null){
        $dao = new MovimentoDao();
        return $dao->lista($limit = null);
    }


    public static function saldoEstoque($id_produto){
        $dao = new MovimentoDao();
        return $dao->saldoEstoque($id_produto);
    }

    public static function inserir(Movimento $m){
        $saldo_anterior = self::saldoEstoque($m->getId_produto());
        $qtde = ($m->getEntrada_saida() == "E") ? $m->getQtde_movimento() : -$m->getQtde_movimento();
        $saldo =  $saldo_anterior + ($qtde); 

        //se for transferencia
        $saldo_atual = ($m->getId_tipo_movimento()== 11 || $m->getId_tipo_movimento() == 12 ) ? $saldo_anterior : $saldo; 
        $m->setSaldoestoque($saldo_atual);

            $id = Service::inserir($m->toArray(),"movimento");
            ProdutoService::atualizarEstoque($m->getId_produto(),$qtde);
            ProdutolocalizacaoService::atualizarEstoque($m->getId_produto(),$m->getId_localizacao(),$qtde);
            return $id;
    }
}