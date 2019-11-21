<?php

include_once '../model/Editora.php';
include_once '../dao/Conexao.php';

class EditoraDao {

    public static function inserir($editora) {

        $sql = "INSERT INTO editora(nome,endereco,telefone, emailContato)"
                . " VALUES "
                . " ( '" . $editora->getNome() . "', "
                . "'" . $editora->getEndereco() . "',"
                . "'" . $editora->getTelefone() . "',"
                . "'" . $editora->getEmail() . "'); ";

        Conexao::executar($sql);

        //header("Location: ../view/FrmEditora.php?salvo");
    }

    public static function listarEditoras() {
        $sql = "select * from editora order by nome";
        $result = Conexao::consultar($sql);
        $lista = new ArrayObject();
        while (list($nome, $endereco, $telefone, $emailContato, $id) = mysqli_fetch_row($result)) {
            $editora = new Editora();
            $editora->setNome($nome);
            $editora->setEndereco($endereco);
            $editora->setTelefone($telefone);
            $editora->setEmail($emailContato);
            $editora->setId($id);
            $lista->append($editora);
        }
        return $lista;
    }

     public static function buscarEditoraPorId($id) {
        $sql = "select * from editora where id='".$id."'";
        $result = Conexao::consultar($sql);
        $lista = new ArrayObject();
        $editora = new Editora();
        while (list($nome, $endereco, $telefone, $emailContato, $id) = mysqli_fetch_row($result)) {
            $editora->setNome($nome);
            $editora->setEndereco($endereco);
            $editora->setTelefone($telefone);
            $editora->setEmail($emailContato);
            $editora->setId($id);
            $lista->append($editora);
        }
        return $editora;
    }
    
    public function ExcluirEditoraPorId($id) {
        $sql = "DELETE FROM editora "
                . " WHERE id = " . $id;

        Conexao::executar($sql);
       header("Location: ../view/FrmEditora.php?excluido");
    }
    
   public static function editar($editora){
       $sql = "update editora set"
               . "nome='".$editora->getNome()."'"
               . "emailContato='".$editora->getemail()."'"
               . "telefone='".$editora->getTelefone()."'"
               . "endereco='".$editora->getEndereco()."'";
       Conexao::executar($sql);       
   }
}


