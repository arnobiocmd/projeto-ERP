<?php
namespace app\models\validacao;

use app\core\Validacao;

class EntradaValidacao{
    public static function salvar($entrada){
        $validacao = new Validacao();

        $validacao->setData("id_produto",$entrada->id_produto);
       $validacao->setData("id_localizacao",$entrada->id_localizacao);
      $validacao->setData("qtde_entrada",$entrada->qtde_entrada);
       $validacao->setData("valor_entrada",$entrada->valor_entrada);
      //  $validacao->setData("sobtotal_entrada",$entrada->sobtotal_entrada);
      //  $validacao->setData("data_entrada",$entrada->data_entrada);


       $validacao->getData("id_produto")->isVazio();
        $validacao->getData("id_localizacao")->isVazio();
       $validacao->getData("qtde_entrada")->isVazio();
       $validacao->getData("valor_entrada")->isVazio();
     //   $validacao->getData("sobtotal_entrada")->isVazio();
     //   $validacao->getData("data_entrada")->isVazio();

        return $validacao;

        
    }
}