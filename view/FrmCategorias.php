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
        ?>
        <div class="container">
            <h2>Cadastro de Categorias</h2>
            <form action="">
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="nome" class="form-control" id="email" placeholder="Informe nome da categoria" name="email">
                </div>
                <div class="form-group">
                    <label for="pwd">Descrição:</label>
                    <input type="descricao" class="form-control" id="pwd" placeholder="Informe a descricao" name="pwd">

                    <div class="checkbox">
                        <label><input type="checkbox" name="remember"> Remember me</label>
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>

    </body>
</html>
