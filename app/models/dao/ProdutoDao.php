<?php

namespace app\models\dao;

use app\core\Model;

class ProdutoDao extends Model{
    public function atualizarEstoque($id_produto,$qtde){
        $sql = "UPDATE produto SET
         estoque_atual = estoque_atual + ($qtde), 
         estoque_real =  estoque_real  + ($qtde)
         WHERE id_produto = $id_produto";
         $this->db->query($sql);
         
    }

    public function listar($filtro){
        $sql = "SELECT * from produto";
        if($filtro){
            $sql .= " WHERE id_produto = $filtro->id_produto";
            
        }
        return $this->select($this->db,$sql);
    }
}