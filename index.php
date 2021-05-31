<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>::e-mail sender::</title>

        <!--Boostrap css-->
        <link 
        rel="stylesheet" 
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" 
        crossorigin="anonymous">

        <style>
            body {
                background-color: #274573;
            }

        </style>

    </head>
    <body>

            <? if(isset($_GET['msg']) && $_GET['msg'] == 'enviada'){?>

                <div class="alert alert-success">
                    E-mail enviado com sucesso.
                </div>

            <? } ?>

            <? if(isset($_GET['msg']) && $_GET['msg'] == 'enviada'){?>

                <div class="alert alert-danger">
                    Ocorreu algo inesperado no envio do e-mail.
                </div>

            <? } ?>

        <div class="container mt-2">
            <div class="row">
                <div class="card mx-auto" style="width: 25em;">
                    <span class="card-header mx-auto">Enviar E-mail (estudo PHP)</span>
                    <div class="card-body">
                        <form action="./enviar_email.php" method="post">
                            <div class="form-group row">
                                <input type="text" name="nome" class="form-control col m-2" placeholder="Nome">
                                <input type="text" name="sobrenome" class="form-control col m-2" placeholder="Sobrenome">
                                <input type="text" name="assunto" class="form-control m-2" placeholder="Assunto">
                                <input type="email" name="email" class="form-control m-2" placeholder="Email">
                                <textarea name="mensagem" class="form-control m-2" cols="30" rows="10" placeholder="Mensagem..."></textarea>
                                <input type="submit" class="btn btn-primary m-2 mx-auto" style="width: 100px" value="Enviar">
                                <input type="reset" class="btn btn-secondary m-2 mx-auto" style="width: 100px" value="Limpar">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    <!--Boostrap js links-->
    <script 
        src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" 
        crossorigin="anonymous"></script>
    <script 
        src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" 
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" 
        crossorigin="anonymous"></script>
    <script 
        src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" 
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" 
        crossorigin="anonymous"></script>
    </body>
</html>