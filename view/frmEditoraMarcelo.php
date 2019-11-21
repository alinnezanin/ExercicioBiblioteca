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
 
        if(isset($_REQUEST['salvo'])){
            echo "<script type='text/javascript'>
		alert('Dados Salvos Com Sucesso!');
				</script>";
        }else{        
        $action = "salvar";
        }
        ?>


        <div class="container">
            <h2>Cadastro de Editoras</h2>
            <form action="../control/salvarEditora.php?<?php echo $action; ?>" method="POST">

                <div class="form-group">
                    <label>Nome:</label>
                    <input type="text" class="form-control" id="txNome" placeholder="Enter email" name="txNome">
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
        </div>

    </body>
</html>
