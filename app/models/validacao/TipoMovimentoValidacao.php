<?php

namespace app\models\validacao;

use app\core\Validacao;

class TipoMovimentoValidacao{
    public static function salvar($tipo_movimento){
        $validacao = new Validacao();

        $validacao->setData("tipo_movimento",$tipo_movimento->tipo_movimento);


        $validacao->getData("tipo_movimento")->isVazio()->isMinimo(5);

        return $validacao;
    }
}