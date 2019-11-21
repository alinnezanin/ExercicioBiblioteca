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
            <h2>Efetuar Emprestimo</h2>
            <form action="/action_page.php">
                <div class="form-group">
                    <label for="email">Livro:</label>
                    <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
                </div>
                <div class="form-group">
                    <label for="pwd">Pessoa:</label>
                    <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
                </div>
                <div class="form-group">
                    <label for="pwd">Data Retirada:</label>
                    <input type="datetime" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
                </div>

                <div class="form-group">
                    <label for="pwd">Data Devolução:</label>
                    <input type="datetime" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" name="remember"> Remember me</label>
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>

    </body>
</html>
