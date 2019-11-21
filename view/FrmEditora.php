<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <title></title>
    </head>
    <body>

        <?php
        require '../model/menu.php';
        if (isset($_REQUEST['salvo'])) {
            echo "<script type='text/javascript'>
		alert('Dados Salvos Com Sucesso!');
				</script>";
        }
        
        if (isset($_REQUEST['excluido'])) {
            echo "<script type='text/javascript'>
		alert('Excluido Com Sucesso!');
				</script>";
        }
        $action = "salvar";
        ?>



        <div class="container">
            <h2>Cadastro de Editoras</h2>
            <form action="../control/ConectorEditora.php?<?php echo $action; ?>" method="POST">

                <div class="form-group">
                    <label>Nome:</label>
                    <input type="text" class="form-control" id="txNome" placeholder="Informe o Nome da Editora" name="txNome">
                </div>

                <div class="form-group">
                    <label>Endereço:</label>
                    <input type="text" class="form-control" id="txEndereco" placeholder="Informe Endereço" name="txEndereco">
                </div>

                <div class="form-group">
                    <label> Telefone:</label>
                    <input type="telefone" class="form-control" id="txTelefone" placeholder="Informe telefone" name="txTelefone">
                </div>

                <div class="form-group">
                    <label>E-mail para contato:</label>
                    <input type="email" class="form-control" id="txEmail" placeholder="Informe E-mail" name="txEmail">
                </div>

                <div class="checkbox">
                    <label><input type="checkbox" name="remember"> Remember me</label>
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>



            <br/>
            <br/>
            <br/>


            <table border='1' class="table">
                <tr>
                    <th> Nome </th>
                    <th> E-mail  </th>
                    <th> Telefone </th>
                    <th> Endereço </th>
                    <th> Editar </th>
                    <th> Excluir </th>
                </tr>


                <?php
                include_once '../dao/EditoraDao.php';
                $lista = EditoraDao::listarEditoras();

                if ($lista->count() == 0) {
                    echo '<h3><b>Nenhuma editora cadastrada!</b></h3>';
                } else {

                    foreach ($lista as $edi) {
                        echo '<tr> ';
                        echo '   <td>' . $edi->getNome() . '</td>';
                        echo '   <td>' . $edi->getEmail() . '</td>';
                        echo '   <td>' . $edi->getTelefone() . '</td>';
                        echo '   <td>' . $edi->getEndereco() . '</td>';
                        echo '<td> 
                            <a href="../control/ConectorEditora.php?editar=true&idEditora='. $edi->getId() . '">
                                 <button>Editar</button></a>
                            </td>';
                        echo '<td> 
                            <a href="../control/ConectorEditora.php?excluir=true&idEditora=' . $edi->getId() . '">             
                                 <button>Excluir</button></a>
                            </td>';
                        echo '</tr> ';
                    }
                }
                ?>
            </table>

        </div>


    </body>
</html>
