<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Flash;
use app\models\service\EntradaService;

use stdClass;

class EntradaController extends Controller{
    private $tabela = "entrada";
    private $campo  = "id_entrada"; 
    public function index(){
        $dados['lista'] = EntradaService::listaPorData(hoje());
        $dados["view"] = "Entrada/Create";
        $this->load("template",$dados);
    }

    public function create(){
        $dados["view"] = "Entrada/Create";
        $this->load("template",$dados);
    }

    public function edit(){
        
    }

    public function inserir(){
        $entrada = new \stdClass();
        $entrada->id_produto = $_POST['id_produto'];
        $entrada->id_localizacao = $_POST['id_localizacao'];
        $entrada->qtde_entrada = $_POST['qtde'];
        $entrada->valor_entrada = $_POST['preco'];
        $entrada->subtotal_entrada =  $entrada->qtde_entrada * $entrada->valor_entrada;
        $entrada->data_entrada = hoje();
        $entrada->hora_entrada = agora();  

        
        
        if(EntradaService::salvar($entrada,$this->campo,$this->tabela)){
            $erro = -1;
            $msg  = Flash::getMsg();
        }else{
            $erro = 1;
            $msg = Flash::getErro();
        }
        $lista = EntradaService::listaPorData(hoje());
        
        echo json_encode(["erro"=>$erro,"msg"=>$msg,"lista"=>$lista]);
    }

    public function excluir(){
        
    }
}