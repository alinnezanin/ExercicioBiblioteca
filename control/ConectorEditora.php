<?php
include_once '../model/Editora.php';
include_once '../dao/EditoraDao.php';
/*  $variavel = $_POST['nomeDoCampo']
  $variavel = $_GET['nomeDoCampo']
  $varial = $_REQUEST['qualquerValorDaURL'] */


if (isset($_REQUEST['salvar'])) {
    $editora = new Editora();
    $editora->setNome($_POST['txNome']);
    $editora->setEndereco($_POST['txEndereco']);
    $editora->setTelefone($_POST['txTelefone']);
    $editora->setEmail($_POST['txEmail']);
    EditoraDao::inserir($editora);
    header("Location: ../view/FrmEditora.php?salvo");
}


if(isset($_REQUEST['editar'])){  
    $id = $_REQUEST['idEditora'];
    $editora = EditoraDao::buscarEditoraPorId($id);
    echo 'passei por aqui';
}

if(isset($_REQUEST['excluir'])){
   
   $id = $_GET['idEditora'];
   $editora = EditoraDao::ExcluirEditoraPorId($id);
     
}

