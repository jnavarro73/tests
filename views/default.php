<?php

?>

<!DOCTYPE html> 
<html>  

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta  http-equiv="expires" content="0" />
    <head>
        <title>Piedra-Papel-Tijeras-Lagarto-Spock</title>                
        <link href="/cva/css/bootstrap.min.css" rel="stylesheet">
        <link href="/cva/css/styles.css" rel="stylesheet">  
    </head>        
    <body>  
        <script type="text/javascript" src="/cva/js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="/cva/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="/cva/js/actions.js"></script>
        <div class=" text-center">
            <h1>Piedra-Papel-Tijeras-Lagarto-Spock</h1>
            <img src="/cva/img/game_image.jpg">
        </div>
        <!-- Mensajes-->
        
        <div class="container">
            <div class="row">
                <div class="alert alert-success collapse" role="alert">
                  
                </div>
                <div class="alert alert-info collapse" role="alert">

                </div>
                <div class="alert alert-warning collapse" role="alert">

                </div>
                <div class="alert alert-danger collapse" role="alert">

                </div>
            </div>
            <!--form-->

            <form  id="form_actions" role="form">
                <div class="row">
                    <div class="col-md-2">
                        <label for="Hand" class="control-label">Selecciona un elemento:</label>
                    </div>
                    <div class="col-md-10">
                        <select id="select_figure" class="selectpicker">
                            <option id="-1" selected>--Opciones--</option>
                            <option id='0' value="0">Scissors</option>
                            <option id='1' value="1">Paper</option>
                            <option id='2' value="2">Rock</option>
                            <option id='3' value="3">Lizard</option>
                            <option id='4' value="4">Spock</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="row pc_random_input form-group">
                            <label for="pc_random" class="col-lg-2 control-label">Seleccion PC</label>
                            <div class="col-md-4" id="selectionPC" class="selectionPC">
                              
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button id="go_button" class="btn">GO!</button> 
                    </div>
                </div>
            </form>
        </div>
</body>

