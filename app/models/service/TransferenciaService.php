<?php

namespace app\models\service;

use app\models\dao\TransferenciaDao;
use app\models\entidade\Movimento;
use app\models\validacao\TransferenciaValidacao;
use app\models\service\Service;
use stdClass;

class TransferenciaService {
    public static function salvar($transferencia,$campo,$tabela){
        $validacao = TransferenciaValidacao::salvar($transferencia);
        $id_transferencia = Service::salvar($transferencia,$campo,$validacao->listaErros(),$tabela);
        //Saida de produto
        if($id_transferencia){
            $mov = new Movimento();
            $mov->setId_localizacao($transferencia->id_origem);
            $mov->setId_tipo_movimento(11);
            $mov->setId_produto($transferencia->id_produto);
            $mov->setEntrada_saida("S");
            $mov->setId_transferencia($id_transferencia);
            $mov->setQtde_movimento($transferencia->qtde_transferencia);
            $mov->setData_movimento($transferencia->data_transferencia);
            $mov->setValor_movimento(0);
            $mov->setSubtotal_movimento(0);
            $mov->setDescricao("Transferencia saida  ID ".$id_transferencia);
            MovimentoService::inserir($mov,100);

            $mov = new Movimento();
            $mov->setId_localizacao($transferencia->id_destino);
            $mov->setId_tipo_movimento(12);
            $mov->setId_produto($transferencia->id_produto);
            $mov->setEntrada_saida("E");
            $mov->setId_transferencia($id_transferencia);
            $mov->setQtde_movimento($transferencia->qtde_transferencia);
            $mov->setData_movimento($transferencia->data_transferencia);
            $mov->setValor_movimento(0);
            $mov->setSubtotal_movimento(0);
            $mov->setDescricao("Transferencia Entrada ID ".$id_transferencia);
            MovimentoService::inserir($mov,100);
        

        }

        return $id_transferencia;

      
       
    }

    public static function listaPorData($data){
        $dao = new TransferenciaDao();
        return $dao->listaPorData($data);
   }
}