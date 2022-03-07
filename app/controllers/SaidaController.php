<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Flash;
use app\models\service\SaidaService;

use stdClass;

class SaidaController extends Controller{
    private $tabela = "saida";
    private $campo  = "id_saida"; 
    
    public function index(){
        
        $dados['lista'] = SaidaService::listaPorData(hoje());
        $dados['listaES'] = SaidaService::listaTipoMovimento();
        
       // i($dados['listaES']);
        $dados["view"] = "Saida/Create";
        $this->load("template",$dados);
    }

    public function create(){
        $dados["view"] = "Saida/Create";
        $this->load("template",$dados);
    }

    public function edit(){
        
    }

    public function inserir(){
        $saida = new \stdClass();
        $saida->id_produto = $_POST['id_produto'];
        $saida->id_localizacao = $_POST['id_localizacao'];
        $saida->qtde_saida = $_POST['qtde'];
        $saida->valor_saida = $_POST['preco'];
        $saida->subtotal_saida =  $saida->qtde_saida * $saida->valor_saida;
        $saida->data_saida = hoje();
        $saida->hora_saida = agora();  

        
        
        if(SaidaService::salvar($saida,$this->campo,$this->tabela)){
            $erro = -1;
            $msg  = Flash::getMsg();
        }else{
            $erro = 1;
            $msg = Flash::getErro();
        }
        $lista = SaidaService::listaPorData(hoje());
        
        echo json_encode(["erro"=>$erro,"msg"=>$msg,"lista"=>$lista]);
    }

    public function excluir(){
        
    }
}