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
        while (list($id, $nome, $emailContato, $telefone, $endereco) =
                                                    mysqli_fetch_row($result)) {
            $editora = new Editora();
            $editora->setId($id);
            $editora->setNome($nome);
            $editora->setEmail($emailContato);
            $editora->setTelefone($telefone);
            $editora->setEndereco($endereco);
            $lista->append($editora);
        }
        return $lista;
    }
    
    public function ExcluirEditoraPorId($id){    
           $sql =    "DELETE FROM editora "
                . " WHERE id = ".$id;
           Conexao::executar($sql);
         header("Location: ../view/FrmEditora.php?salvo");         
        
    }

}
