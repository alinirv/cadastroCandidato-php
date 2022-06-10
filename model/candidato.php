<?php
class Candidato{

    private $idCandidato;
    private $nome;
    private $endereco;
    private $cidade;
    private $estado;
    private $ocupacao;
    private $cargo;
    private $curriculo;
    private $operacao;
    private $con;


    function __construct()
    {
        try {
            $this->abrirConexao();            

        } catch (PDOException $ex) {
            echo "<h2>Exceção</h2>";
            echo "Erro: " . $ex->getMessage() . "<br>";
            echo "<p><a href='index.php'>Clique aqui para voltar.</a></p>";
            die();
        }
        
    }
    public function obterCampos()
    {
        try {
            
            // Operação
            if (isset($_REQUEST["btnOperacao"])) {
                if (!empty($_REQUEST["btnOperacao"])) {
                    $this->operacao = $_REQUEST["btnOperacao"];
                    $this->operacao = strtoupper($this->operacao);
                }
            } else {
                $this->operacao = "VAZIO";
            }
            // ID Candidato
            if (isset($_REQUEST["txtIdCandidato"])) {
                if (!empty($_REQUEST["txtIdCandidato"])) {
                    $this-> idCandidato = $_REQUEST["txtIdCandidato"];
                }
            }
            // Nome
            if (isset($_REQUEST["txtNome"])) {
                if (!empty($_REQUEST["txtNome"])) {
                    $this -> nome = $_REQUEST["txtNome"];
                }
            }
            // Enderço
            if (isset($_REQUEST["txtEndereco"])) {
                if (!empty($_REQUEST["txtEndereco"])) {
                    $this -> endereco = $_REQUEST["txtEndereco"];
                }
            }
            // Cidade
            if (isset($_REQUEST["txtCidade"])) {
                if (!empty($_REQUEST["txtCidade"])) {
                    $this -> cidade = $_REQUEST["txtCidade"];
                    
                }
            }
            // Estado
            if (isset($_REQUEST["txtUF"])) {
                if (!empty($_REQUEST["txtUF"])) {
                    $this -> estado = $_REQUEST["txtUF"];
                    
                }
            }
            // Ocupação
            if (isset($_REQUEST["txtOcupacao"])) {
                if (!empty($_REQUEST["txtOcupacao"])) {
                    $this -> ocupacao = $_REQUEST["txtOcupacao"];
                    
                }
            }
            // Cargo
            if (isset($_REQUEST["txtCargo"])) {
                if (!empty($_REQUEST["txtCargo"])) {
                    $this -> cargo = $_REQUEST["txtCargo"];
                    
                }
            }
            // Curriculo
            if (isset($_REQUEST["txtCurriculo"])) {
                if (!empty($_REQUEST["txtCurriculo"])) {
                    $this -> curriculo = $_REQUEST["txtCurriculo"];
                    
                }
            }
            echo "Operação: $this->operacao <br>";
            echo "Id Candidato: $this->idCandidato <br>";
            echo "Nome: $this->nome <br>";   
            echo "Nome: $this->cidade <br>";
            echo "Nome: $this->estado <br>"; 
            echo "Nome: $this->ocupacao <br>";
            echo "Nome: $this->cargo <br>";
            echo "Nome: $this->curriculo <br>";              


        } catch (PDOException $ex) {
            echo "<h2>Exceção</h2>";
            echo "Erro: " . $ex->getMessage() . "<br>";
            echo "<p><a href='106_Prod_POO_Principal.php'>Clique aqui para voltar.</a></p>";
            die();
        }
    }
    public function executarOperacao()
    {
        try{
            switch($this-> operacao){
                case "SALVAR":
                    $this-> setCandidato();                                        
                    break;
                case "EXIBIR":
                    $candidato = $this-> getCandidato();
                    include "views\candidatoExibir.php";
                    break;
                case "VAZIO" :
                    break;    
               

            }
        }catch (PDOException $ex) {
            echo "<h2>Exceção</h2>";
            echo "Erro: " . $ex->getMessage() . "<br>";
            echo "<p><a href='106_Prod_POO_Principal.php'>Clique aqui para voltar.</a></p>";
            die();
        }
    }
    private function abrirConexao() 
    {
        try {
            $servidor = "localhost";
            $banco = "candidatos";
            $usuario = "root";
            $senha = ""; //alterar senha se necessário

            $con = new PDO(
                "mysql:host=$servidor;dbname=$banco;charset=utf8",
                $usuario,
                $senha
            );
            echo "Conexão efetuada com sucesso! <br><br>";
           
        } catch (PDOException $ex) {
            echo "<h2>Exceção</h2>";
            echo "Erro: " . $ex->getMessage() . "<br>";
            die();
        }
    }
    public function setCandidato()
    {        
        try {
            echo "TESTE SE CHEGA FUNÇÃO SALVAR: $this->nome <br>";

            $cmdSQL = $this->con->prepare("INSERT INTO candidato(nome, endereco, cidade, estado, ocupacao, cargo, curriculo)
                                    VALUE(:nome, :endereco, :cidade, :estado, :ocupacao, :cargo, :curriculo)");
                
          
            $cmdSQL->bindParam(":nome", $this->nome);
            $cmdSQL->bindParam(":endereco", $this->endereco);
            $cmdSQL->bindParam(":cidade", $this->cidade);
            $cmdSQL->bindParam(":estado", $this->estado);
            $cmdSQL->bindParam(":ocupacao", $this->ocupacao);        
            $cmdSQL->bindParam(":cargo", $this->cargo);
            $cmdSQL->bindParam(":curriculo",$this->curriculo);
    
            if ($cmdSQL->execute()) {
                include "views\candidatoSalvar.php";
            } else {
                echo "Falha na inserção! <br>";
                var_dump($cmdSQL->errorInfo());
                die();
            }   
            
        } catch (PDOException $ex) {
            echo "<h2>Exceção</h2>";
            echo "Erro: " . $ex->getMessage() . "<br>";
            echo "<p><a href='index.php'>Clique aqui para voltar.</a></p>";
            die();
        }

    }    
    public function getCandidato()
    {
        try {            
    
            $cmdSQL = $this->con->prepare("SELECT * FROM candidato
                                     WHERE idCandidato = :idCandidato");
    
            $cmdSQL->bindParam(":idCandidato",  $this->idCandidato);
    
            if ($cmdSQL->execute()) {
    
                $candidato = $cmdSQL->fetchAll(); //verificar if
    
                if (count($candidato)) {
                    return $candidato;
                } else {
                    return [];
                }
            } else {
                echo "Falha na atualização! <br>";
                var_dump($cmdSQL->errorInfo());
                die();
            }
        } catch (PDOException $ex) {
            echo "<h2>Exceção</h2>";
            echo "Erro: " . $ex->getMessage() . "<br>";
            echo "<p><a href='index.php'>Clique aqui para voltar.</a></p>";
            die();
        }
        
    }
    public function deleteCandidato()
    {
        try {
            
            $cmdSQL = $this->con->prepare("DELETE FROM candidatos
                                        WHERE idCandidato = :idCandidato");


            $cmdSQL->bindParam(":idCandidato", $this->idCandidato);
            

            if ($cmdSQL->execute()) {
                echo "Alteração efetuada com sucesso! <br>";
            } else {
                echo "Falha na atualização! <br>";
                var_dump($cmdSQL->errorInfo());
                die();
            }
        } catch (PDOException $ex) {
            echo "<h2>Exceção</h2>";
            echo "Erro: " . $ex->getMessage() . "<br>";
            echo "<p><a href='index.php'>Clique aqui para voltar.</a></p>";
            die();
        }

    }
    function __destruct()
    {
        $this->con = null;
    }   
    
}
