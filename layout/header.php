<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/layout.css" rel="stylesheet" type="text/css"/>
        <script src="bootstrap/js/bootstrap.js" type="text/javascript"></script>
        <style>

        </style>
    </head>
    <body>

        <div class="navbar navbar-static-top navbar-inverse">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bar1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Menu</a>
            </div>
            <div class="collapse navbar-collapse pull-right" >
                <ul class="nav navbar-nav ">
                    <li class="active"><a href="#">Link 1</a></li>
                    <li><a href="#">Link 2</a></li>
                    <li><a href="#">Link 3</a></li>
                    <li></li>
                </ul>
                <div class="navbar navbar-form pull-right">
                    <form action="<?php echo $_SERVER['SCRIPT_NAME'];?>" method="GET">
                        <label class="label" for="email">Email:</label> 
                        <input type="text" name="email"/>
                        <label class="label" for="senha"> Senha:</label>
                        <input type="password" name="senha"/>
                        <button class="btn btn-success" type="submit">Login</button>
                    </form>
                </div>
            </div>

        </div>



