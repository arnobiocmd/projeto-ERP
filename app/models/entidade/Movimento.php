<?php

namespace app\models\entidade;

use stdClass;

class Movimento{
    private $id_movimento;
    private $id_localizacao;
    private $id_tipo_movimento;
    private $id_produto;
    private $id_ordem_compra;
    private $id_pedido;
    private $id_entrada_avulsa;
    private $id_transferencia;
    private $id_saida_avulsa;
    private $id_ordem_producao;
    private $entrada_saida;
    private $data_movimento;
    private $qtde_movimento;
    private $valor_movimento;
    private $subtotal_movimento;
    private $descricao;
    private $saldoestoque;
    

     /**
     * Get the value of id_transferencia
     */ 
    public function getId_transferencia()
    {
        return $this->id_transferencia;
    }

    /**
     * Set the value of id_transferencia
     *
     * @return  self
     */ 
    public function setId_transferencia($id_transferencia)
    {
        $this->id_transferencia = $id_transferencia;

        return $this;
    }

   

    /**
     * Get the value of id_movimento
     */ 
    public function getId_movimento()
    {
        return $this->id_movimento;
    }

    /**
     * Set the value of id_movimento
     *
     * @return  self
     */ 
    public function setId_movimento($id_movimento)
    {
        $this->id_movimento = $id_movimento;

        return $this;
    }

    /**
     * Get the value of id_localizacao
     */ 
    public function getId_localizacao()
    {
        return $this->id_localizacao;
    }

    /**
     * Set the value of id_localizacao
     *
     * @return  self
     */ 
    public function setId_localizacao($id_localizacao)
    {
        $this->id_localizacao = $id_localizacao;

        return $this;
    }

    /**
     * Get the value of id_tipo_movimento
     */ 
    public function getId_tipo_movimento()
    {
        return $this->id_tipo_movimento;
    }

    /**
     * Set the value of id_tipo_movimento
     *
     * @return  self
     */ 
    public function setId_tipo_movimento($id_tipo_movimento)
    {
        $this->id_tipo_movimento = $id_tipo_movimento;

        return $this;
    }

    /**
     * Get the value of id_produto
     */ 
    public function getId_produto()
    {
        return $this->id_produto;
    }

    /**
     * Set the value of id_produto
     *
     * @return  self
     */ 
    public function setId_produto($id_produto)
    {
        $this->id_produto = $id_produto;

        return $this;
    }

    /**
     * Get the value of id_ordem_compra
     */ 
    public function getId_ordem_compra()
    {
        return $this->id_ordem_compra;
    }

    /**
     * Set the value of id_ordem_compra
     *
     * @return  self
     */ 
    public function setId_ordem_compra($id_ordem_compra)
    {
        $this->id_ordem_compra = $id_ordem_compra;

        return $this;
    }

    /**
     * Get the value of id_pedido
     */ 
    public function getId_pedido()
    {
        return $this->id_pedido;
    }

    /**
     * Set the value of id_pedido
     *
     * @return  self
     */ 
    public function setId_pedido($id_pedido)
    {
        $this->id_pedido = $id_pedido;

        return $this;
    }

    /**
     * Get the value of id_entrada_avulsa
     */ 
    public function getId_entrada_avulsa()
    {
        return $this->id_entrada_avulsa;
    }

    /**
     * Set the value of id_entrada_avulsa
     *
     * @return  self
     */ 
    public function setId_entrada_avulsa($id_entrada_avulsa)
    {
        $this->id_entrada_avulsa = $id_entrada_avulsa;

        return $this;
    }

    /**
     * Get the value of id_saida_avulsa
     */ 
    public function getId_saida_avulsa()
    {
        return $this->id_saida_avulsa;
    }

    /**
     * Set the value of id_saida_avulsa
     *
     * @return  self
     */ 
    public function setId_saida_avulsa($id_saida_avulsa)
    {
        $this->id_saida_avulsa = $id_saida_avulsa;

        return $this;
    }

    /**
     * Get the value of id_ordem_producao
     */ 
    public function getId_ordem_producao()
    {
        return $this->id_ordem_producao;
    }

    /**
     * Set the value of id_ordem_producao
     *
     * @return  self
     */ 
    public function setId_ordem_producao($id_ordem_producao)
    {
        $this->id_ordem_producao = $id_ordem_producao;

        return $this;
    }

    /**
     * Get the value of entrada_saida
     */ 
    public function getEntrada_saida()
    {
        return $this->entrada_saida;
    }

    /**
     * Set the value of entrada_saida
     *
     * @return  self
     */ 
    public function setEntrada_saida($entrada_saida)
    {
        $this->entrada_saida = $entrada_saida;

        return $this;
    }

    /**
     * Get the value of data_movimento
     */ 
    public function getData_movimento()
    {
        return $this->data_movimento;
    }

    /**
     * Set the value of data_movimento
     *
     * @return  self
     */ 
    public function setData_movimento($data_movimento)
    {
        $this->data_movimento = $data_movimento;

        return $this;
    }

    /**
     * Get the value of qtde_movimento
     */ 
    public function getQtde_movimento()
    {
        return $this->qtde_movimento;
    }

    /**
     * Set the value of qtde_movimento
     *
     * @return  self
     */ 
    public function setQtde_movimento($qtde_movimento)
    {
        $this->qtde_movimento = $qtde_movimento;

        return $this;
    }

    /**
     * Get the value of valor_movimento
     */ 
    public function getValor_movimento()
    {
        return $this->valor_movimento;
    }

    /**
     * Set the value of valor_movimento
     *
     * @return  self
     */ 
    public function setValor_movimento($valor_movimento)
    {
        $this->valor_movimento = $valor_movimento;

        return $this;
    }

    /**
     * Get the value of subtotal_movimento
     */ 
    public function getSubtotal_movimento()
    {
        return $this->subtotal_movimento;
    }

    /**
     * Set the value of subtotal_movimento
     *
     * @return  self
     */ 
    public function setSubtotal_movimento($subtotal_movimento)
    {
        $this->subtotal_movimento = $subtotal_movimento;

        return $this;
    }

    /**
     * Get the value of descricao
     */ 
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set the value of descricao
     *
     * @return  self
     */ 
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get the value of saldoestoque
     */ 
    public function getSaldoestoque()
    {
        return $this->saldoestoque;
    }

    /**
     * Set the value of saldoestoque
     *
     * @return  self
     */ 
    public function setSaldoestoque($saldoestoque)
    {
        $this->saldoestoque = $saldoestoque;

        return $this;
    }

    public function toArray(){
        $array = array();
        foreach ($this as $key => $value) {
           if (property_exists($this,$key)){
               $array[$key] = $value;
           }
        }
        return $array;
    }
    public function toStd(){
        $std = new \stdClass();
        foreach ($this as $key => $value) {
            if(property_exists($this, $key)){
                if(is_object($value)){
                    $std->{$key} = $value->getStdClass();
                }else{
                    $std->{$key} = $value;
                }
            }
        }
        return $std;
    }

   
}
