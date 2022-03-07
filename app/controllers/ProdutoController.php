<?php
namespace app\controllers;

use app\core\Controller;
use app\core\Flash;
use app\models\service\ProdutoService;
use app\models\service\Service;
use stdClass;

class ProdutoController extends Controller{
    private $tabela = "produto";
    private $campo = "id_produto";
    public function index(){
        $filtro = "";
        $dados['lista'] = Service::lista($this->tabela);
        $dados['produtoss'] = ProdutoService::listar($filtro);
        $dados['view'] = "Produto/Index";
        $this->load("template",$dados);
    }
    public function create(){
        $dados['produto'] = Flash::getForm();
        $dados['categorias'] = Service::lista('categoria');
        $dados['unidades'] = Service::lista('unidade');
        $dados['view'] = "Produto/Create";
        $this->load("template",$dados);
    }
    public function salvar(){
        $produto = new \stdClass();

        $produto->id_produto = $_POST['id_produto'];
        $produto->id_categoria = $_POST['id_categoria'];
        $produto->id_unidade = $_POST['id_unidade'];
        $produto->produto = $_POST['produto'];
        $produto->eh_produto = $_POST['eh_produto'];
        $produto->eh_insumo = $_POST['eh_insumo'];
        $produto->eh_promocao = $_POST['eh_promocao'];
        $produto->eh_maisvendido = $_POST['eh_maisvendido'];
        $produto->eh_lancamento = $_POST['eh_lancamento'];
        $produto->codigo_barra = $_POST['codigo_barra'];
        $produto->estoque_inicial = $_POST['estoque_inicial'];
        $produto->estoque_minimo = $_POST['estoque_minimo'];
        $produto->estoque_maximo = $_POST['estoque_maximo'];
        $produto->estoque_reservado = $_POST['estoque_reservado'];
        $produto->estoque_real = $_POST['estoque_real'];
        $produto->preco = $_POST['preco'];
        $produto->estoque_atual = $_POST['estoque_atual'];
        $produto->custo_atual = $_POST['custo_atual'];
        $produto->custo_medio = $_POST['custo_medio'];



        Flash::setForm($produto);
        if(ProdutoService::salvar($produto,$this->campo,$this->tabela)){
            $this->redirect(URL_BASE."produto");
                     
        }else{
            if(!$produto->id_produto){
                $this->redirect(URL_BASE."produto/create");
            }else{
                $this->redirect(URL_BASE."produto/edit/".$produto->id_produto);
            }
        }


    }
    public function edit($id){
        $produto = Service::get($this->tabela,$this->campo,$id);
       
            $dados['produto'] = $produto;
            $dados['categorias'] = Service::lista('categoria');
            $dados['unidades'] = Service::lista('unidade');
            $dados['view'] = "Produto/Create";
            $this->load("template",$dados);
        

       
        
    }
    public function excluir($id){
        $produto = Service::excluir($this->tabela,$this->campo,$id);
        if($produto){
            $this->redirect(URL_BASE."produto");
        }
    }

    public function buscar($q){
        $produto = Service::getLike($this->tabela,"produto",$q,true);
        echo json_encode($produto);
    }

    public function filtro(){
        $filtro = new \stdClass();
        $filtro->id_produto = $_GET['id_produto'];
        $dados['lista'] = Service::lista($this->tabela);
        $dados['produtoss'] = ProdutoService::listar($filtro);
      
       // $dados['produto'] = Service::get("produto","id_produto",$filtro->id_produto);

      

        $dados['view'] = "Produto/Index";
            $this->load("template",$dados);
    }
}