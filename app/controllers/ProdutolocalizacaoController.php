<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Flash;
use app\models\dao\ProdutolocalizacaoDao;
use app\models\service\ProdutolocalizacaoService;
use app\models\service\ProdutoService;
use app\models\service\Service;
use stdClass;

class ProdutolocalizacaoController extends Controller{
    private $tabela = "produto_localizacao";
    private $campo  = "id_produto_localizacao";
    public function index(){
        //$dados['lista'] = Service::lista($this->tabela);
        $dados['produto_localizacao'] = Flash::getForm();
        $dados['lista'] = ProdutolocalizacaoService::lista();
        $dados['produto'] = Service::lista("produto");
        $dados['local'] = Service::lista("localizacao");
        $dados['view']  = 'Produto_localizacao/Create';
        $this->load("template",$dados);

    }

    public function create(){
        
    }

    public function salvar(){
        $produto_localizacao = new \stdClass();

        $produto_localizacao->id_produto = $_POST['id_produto'];
        $produto_localizacao->id_localizacao = $_POST['id_localizacao'];
        $produto_localizacao->id_produto_localizacao = $_POST['id_produto_localizacao'];
        $produto_localizacao->estoque = 0;
        $em_massa = $_POST['em_massa'];
        $tipo    = $_POST['tipo'];

    
        Flash::setForm($produto_localizacao);
        if($em_massa == "S"){
            ProdutolocalizacaoService::salvarMassa($produto_localizacao->id_localizacao,$tipo);
            $this->redirect(URL_BASE."produtolocalizacao");
        }else{
            if(ProdutolocalizacaoService::salvar($produto_localizacao,$this->campo,$this->tabela)){
                $this->redirect(URL_BASE."produtolocalizacao");
            }else{
                if(!$produto_localizacao->id_produto_localizacao){
                    $this->redirect(URL_BASE."produtolocalizacao");
                }else{
                    $this->redirect(URL_BASE."produtolocalizacao/edit/".$produto_localizacao->id_produto_localizacao);
                }
            }
        }
        


    }

    public function edit($id){
        $produto_localizacao = Service::get($this->tabela,$this->campo,$id);
        
        if($produto_localizacao){
            $dados['lista'] = ProdutolocalizacaoService::lista();
            $dados['produto'] = Service::lista("produto");
            $dados['local'] = Service::lista("localizacao");
          
            $dados['produto_localizacao'] = $produto_localizacao;
            $dados['view']  = 'Produto_localizacao/Create';
            $this->load("template",$dados);
        }
       
    }

    public function excluir($id){
        $produto_localizacao = Service::excluir($this->tabela,$this->campo,$id);
        if($produto_localizacao){
            $this->redirect(URL_BASE."produtolocalizacao");
        }
    }

    public function listaPorProduto($id_produto){
        $lista = ProdutolocalizacaoService::listaPorProduto($id_produto);
        echo json_encode($lista);
    }

    
}