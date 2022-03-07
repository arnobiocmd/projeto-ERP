<?php
namespace app\models\validacao;

use app\core\Validacao;

class CategoriaValidacao{
    public static function salvar($categoria){
        $validacao = new Validacao();

        $validacao->setData('categoria',$categoria->categoria);

        $validacao->getData('categoria')->isVazio();


        return $validacao;

    }
}