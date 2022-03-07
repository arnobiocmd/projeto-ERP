<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Flash;
use app\models\service\TransferenciaService;

use stdClass;

class TransferenciaController extends Controller{
    private $tabela = "transferencia";
    private $campo  = "id_transferencia"; 
    public function index(){
        $dados['lista'] = TransferenciaService::listaPorData(hoje());
        $dados["view"] = "Transferencia/Create";
        $this->load("template",$dados);
    }

    public function create(){
        $dados["view"] = "Transferencia/Create";
        $this->load("template",$dados);
    }

    public function edit(){
        
    }

    public function inserir(){
        $transferencia = new \stdClass();
        $transferencia->id_produto                  = $_POST['id_produto'];
        $transferencia->id_origem                   = $_POST['id_origem'];
        $transferencia->id_destino                  = $_POST['id_destino'];
        $transferencia->qtde_transferencia          = $_POST['qtde'];
        $transferencia->data_transferencia = hoje();
         

        
        
        if(TransferenciaService::salvar($transferencia,$this->campo,$this->tabela)){
            $erro = -1;
            $msg  = Flash::getMsg();
        }else{
            $erro = 1;
            $msg = Flash::getErro();
        }
        $lista = TransferenciaService::listaPorData(hoje());
        
        echo json_encode(["erro"=>$erro,"msg"=>$msg,"lista"=>$lista]);
    }

    public function excluir(){
        
    }
}