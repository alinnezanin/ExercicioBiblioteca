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
            <h2>Cadastro de Pessoas</h2>
            <form action="/action_page.php">

                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="nome" class="form-control" id="email" placeholder="Informe nome" name="nome">
                </div>

                <div class="form-group">
                    <label for="telefone">Telefone:</label>
                    <input type="telefone" class="form-control" id="email" placeholder="Informe telefone" name="telefone">
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Informe email" name="email">
                </div>

                <div class="form-group">
                    <label for="matricula">Matricula:</label>
                    <input type="matricula" class="form-control" id="email" placeholder="Informe matricula" name="matricula">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Tipo</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>Aluno</option>
                        <option>Professor</option>

                    </select>
                </div>

                <div class="form-group">
                    <label for="curso">Curso:</label>
                    <input type="curso" class="form-control" id="email" placeholder="Informe curso" name="curso">
                </div>

                <div class="checkbox">
                    <label><input type="checkbox" name="remember"> Remember me</label>
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>

    </body>
</html>
