<?php

class Usuario {
    // Attributes
    private $idusuario;
    private $dislogin;
    private $dissenha;
    private $dtcadastro;

    // Methods
    public function loadById($id) {
        $sql = new Sql();
        
        $results = $sql->select("SELECT * FROM tb_usuario WHERE idusuario = :ID", array(
            ":ID"=>$id
        ));

        if (count($results[0]) > 0) {
            $row = $results[0];
            $this->setIdusuario($row['idusuario']);
            $this->setDislogin($row['deslogin']);
            $this->setDissenha($row['dessenha']);
            $this->setDtcadastro(new DateTime($row['dtcadastro']));
        }
    }

    public function __toString() {
        return json_encode(array(
            "idusuario" => $this->getIdusuario(),
            "dislogin" => $this->getDislogin(),
            "dissenha" => $this->getDissenha(),
            "dtcadastro" => $this->getDtcadastro()->format("d/m/Y H:i:s")
        ));
    }

    // Getters, Setters and Construtor
    public function getIdusuario() {
        return $this->idusuario;
    }
    public function setIdusuario($idusuario) {
        $this->idusuario = $idusuario;
    }
    public function getDislogin() {
        return $this->dislogin;
    }
    public function setDislogin($dislogin) {
        $this->dislogin = $dislogin;
    }
    public function getDissenha() {
        return $this->dissenha;
    }
    public function setDissenha($dissenha) {
        $this->dissenha = $dissenha;
    }
    public function getDtcadastro() {
        return $this->dtcadastro;
    }
    public function setDtcadastro($dtcadastro) {
        $this->dtcadastro = $dtcadastro;
    }
}

?>