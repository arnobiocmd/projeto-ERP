<?php

namespace app\models\service;

use app\models\validacao\ContatoValidacao;
use app\models\service\Service;
class ContatoService{
    public static function salvar($contato,$campo,$tabela){
        $validacao = ContatoValidacao::salvar($contato);
        return Service::salvar($contato,$campo,$validacao->listaErros(),$tabela);
    }
}