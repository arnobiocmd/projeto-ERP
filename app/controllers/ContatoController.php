<?php
namespace app\controllers;
use app\core\Controller;
use app\core\Flash;
use app\models\service\ContatoService;
use app\models\service\Service;
use stdClass;

class ContatoController extends Controller{
    private $tabela = "contato";
    private $campo   = "id_contato";
    public function index(){
        $dados["lista"] = Service::lista($this->tabela);
        $dados["view"] = "Contato/Index";
        $this->load("template",$dados);
    }
    public function create(){
        $dados['contato'] = Flash::getForm();
        //i($dados['contato']);
        $dados["view"] = "Contato/Create";
        $this->load("template",$dados);
    }
    public function salvar(){
        $contato = new \stdClass();

        $contato->id_contato = $_POST['id_contato'];
        $contato->nome_fantasia = $_POST['nome_fantasia'];
        $contato->eh_cliente = $_POST['eh_cliente'];
        $contato->eh_fornecedor = $_POST['eh_fornecedor'];
        $contato->eh_transportador = $_POST['eh_transportador'];
        $contato->nome = $_POST['nome'];
        $contato->cpf = $_POST['cpf'] ? tira_mascara($_POST['cpf']) : null;
        $contato->cnpj = $_POST['cnpj'];
        $contato->data_cadastro = $_POST['data_cadastro'];
        $contato->email = $_POST['email'];
        $contato->senha = $_POST['senha'];
        $contato->fone = $_POST['fone'];
        $contato->celular = $_POST['celular'];
        $contato->ativo = $_POST['ativo'];
        $contato->logradouro = $_POST['logradouro'];
        $contato->numero = $_POST['numero'];
        $contato->complemento = $_POST['complemento'];
        $contato->bairro = $_POST['bairro'];
        $contato->cep = $_POST['cep'];
        $contato->uf = $_POST['uf'];
        $contato->cidade = $_POST['cidade'];
        $contato->ie = $_POST['ie'];
        $contato->rg = $_POST['rg'];

      

        Flash::setForm($contato);
        if(ContatoService::salvar($contato,$this->campo,$this->tabela)){
            $this->redirect(URL_BASE."contato");
                     
        }else{
            if(!$contato->id_contato){
                $this->redirect(URL_BASE."contato/create");
            }else{
                $this->redirect(URL_BASE."contato/edit/".$contato->id_contato);
            }
        }


    }
    public function edit($id){
        $contato = Service::get($this->tabela,$this->campo,$id);
        
            $dados['contato'] = $contato;
            $dados["view"] = "Contato/Create";
            $this->load("template",$dados);
        
        
        
    }
    public function excluir($id){
        $contato = Service::excluir($this->tabela,$this->campo,$id);
        if($contato){
            $this->redirect(URL_BASE."contato");
        }
    }

}