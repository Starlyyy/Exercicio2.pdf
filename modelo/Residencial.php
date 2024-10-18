<?php 

require_once('IConsumidorEnergia.php');

class Residencial implements IConsumidorEnergia{
    private $consumo;

    //metodo Valor Fatura

    public function getValorFatura(){
        return $this->consumo * 1.05;
    }


    public function getConsumo()
    {
        return $this->consumo;
    }

    public function setConsumo($consumo): self
    {
        $this->consumo = $consumo;

        return $this;
    }
}
