<?php

namespace app\models\dao;

use app\core\Model;

class ProdutolocalizacaoDao extends Model{
    public function lista(){
        $sql = "SELECT * FROM produto_localizacao pl, produto p, localizacao l 
        WHERE pl.id_produto = p.id_produto AND 
        pl.id_localizacao = l.id_localizacao";
        return $this->select($this->db,$sql);
    }

    public function listaPorProduto($id_produto){
        $sql = "SELECT * FROM produto_localizacao pl, produto = p, localizacao = l
        WHERE pl.id_produto = p.id_produto AND pl.id_localizacao = l.id_localizacao
        AND pl.id_produto = $id_produto";
        return $this->select($this->db,$sql);
    }

    public function getProdutoLocalizacao($id_produto,$id_localizacao){
        $sql = "SELECT * FROM produto_localizacao WHERE id_produto = $id_produto 
        AND id_localizacao = $id_localizacao";
        return $this->select($this->db,$sql,false);
    }
    public function atualizarEstoque($id_produto,$id_localizacao,$qtde){
        $sql = "UPDATE produto_localizacao SET estoque = estoque + ($qtde) WHERE id_produto = '$id_produto' AND
        id_localizacao = '$id_localizacao'";
        return $this->db->query($sql);
    }
}