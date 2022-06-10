<?php
include "model/candidato.php";

class CandidatoController{

    public $model;

    public function __construct()
    {
        $this-> model = new Candidato;
        $this-> model -> obterCampos();
        $this-> model -> executarOperacao();

    }

    public function invoke(){
        include "views\candidatoCadastro.php";        
    }

    

}



?>