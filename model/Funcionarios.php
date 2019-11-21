<?php

include_once './Pessoa.php';
/**
 * Description of Funcionarios
 *
 * @author aline.zanin
 */
class Funcionarios extends Pessoa {
    
    private $codigo;
    private $funcao;
    
    function __construct($codigo, $funcao) {
        $this->codigo = $codigo;
        $this->funcao = $funcao;
    }

    
    function getCodigo() {
        return $this->codigo;
    }

    function getFuncao() {
        return $this->funcao;
    }

    function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    function setFuncao($funcao) {
        $this->funcao = $funcao;
    }


    
}
