<?php

namespace app\models\dao;

use app\core\Model;

class SaidaDao extends Model{
    public function listaPorData($data){
        $sql = "SELECT e.*,p.produto,l.localizacao FROM saida e, produto p, localizacao l WHERE
         e.id_produto = p.id_produto AND e.id_localizacao = l.id_localizacao AND data_saida = '$data'";
         return $this->select($this->db,$sql);
    }

    public function listaTipoMovimento(){
        $sql = "SELECT * FROM tipo_movimento WHERE ent_sai = 'S' ORDER BY tipo_movimento DESC";
        return $this->select($this->db,$sql);
    }
}