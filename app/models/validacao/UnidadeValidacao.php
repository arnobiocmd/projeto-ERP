<?php

namespace app\models\validacao;

use app\core\Validacao;

class UnidadeValidacao{
    public static function salvar($unidade){
        $validacao = new Validacao();

        $validacao->setData("unidade",$unidade->unidade);
        $validacao->setData("abrev",$unidade->abrev);

        $validacao->getData("unidade")->isVazio();
        $validacao->getData("abrev")->isVazio();

        return $validacao;

    }
}