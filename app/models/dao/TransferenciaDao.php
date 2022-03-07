<?php

namespace app\models\dao;

use app\core\Model;

class TransferenciaDao extends Model{
    public function listaPorData($data){
        $sql = "SELECT t.*,p.produto,o.localizacao as origem, d.localizacao as destino FROM 
        transferencia t, produto p, localizacao o, localizacao d WHERE
         t.id_produto = p.id_produto AND
          t.id_origem = o.id_localizacao AND 
          t.id_destino = d.id_localizacao AND
          data_transferencia = '$data'";

         return $this->select($this->db,$sql);
    }
}