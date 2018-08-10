<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <title>SIGE - Sistema de Gestão Esportiva</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript"></script>

    <script>
        $(document).ready(function () {

            //apenas testando jquery
            //alert('Jquery funcionou');

            //ao clicar em qualquer li
            $("#abas ul li").click(function () {
                //remove a class de todos li
                $("#abas ul li").removeClass("selecionado");
                //add a class apenas no clicado
                $(this).addClass("selecionado");

                //descobrir o id de quem eu cliquei
                var meuId = $(this).attr("id");
                $(".conteudo").hide();
                $("."+meuId).show();

            });
        })
    </script>
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #8e0000">
        <a class="navbar-brand" href="#">SIGE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Início <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>

<!--    <form action="?acao=cadastrar" method="post">-->
<!--        <div style="margin-left: 650px;margin-top: 100px;border-color: #8e0000; border-style: solid; border-radius: 10px; width: 516px;padding: 20px;">-->
<!---->
<!--            <div class="col-md-4 mb-3" style="color: #8e0000">-->
<!--                <label for="validationServer01">Primeiro nome</label>-->
<!--                <input type="text" class="form-control" id="validationServer01" name="nome" placeholder="Primeiro Nome" value="Nome" required style="width: 205px; height: 40px;">-->
<!--            </div>-->
<!---->
<!--            <div class="col-md-4 mb-3" style="color: #8e0000">-->
<!--                <label for="validationServer02">Último nome</label>-->
<!--                <input type="text" class="form-control" id="validationServer02" placeholder="Último nome" value="Sobrenome" required style="width: 205px; height: 40px;">-->
<!--            </div>-->
<!---->
<!--            <div class="col-md-4 mb-3" style="color: #8e0000">-->
<!--                <label for="validationServerUsername">Usuário</label>-->
<!--                <div class="input-group">-->
<!--                    <input type="text" class="form-control" id="validationServerUsername" placeholder="Usuario" aria-describedby="inputGroupPrepend3" required style="width: 205px; height: 40px;">-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!--            <div class="col-md-6 mb-3" style="color: #8e0000">-->
<!--                <label for="validationServer03">Data</label>-->
<!--                <input type="date" class="form-control" id="validationServer03" name="data" placeholder="date" required style="width: 205px; height: 40px;">-->
<!--            </div>-->
<!---->
<!--            <div class="col-md-3 mb-3" style="color: #8e0000">-->
<!--                <label for="validationServer04">Ocupação</label>-->
<!--                <input type="text" class="form-control" id="validationServer04" placeholder="Aluno" required style="width: 205px; height: 40px;">-->
<!--            </div>-->
<!---->
<!--            <div class="form-group" style="color: #8e0000; padding-left: 12px">-->
<!--                <label for="exampleInputPassword1">Senha</label>-->
<!--                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha" style="width: 205px; height: 40px;">-->
<!--            </div>-->
<!---->
<!--            <div class="col-md-3 mb-3" style="color: #8e0000">-->
<!--                <label for="validationServer05">CPF</label>-->
<!--                <input type="number" class="form-control" id="validationServer05" name="cpf" placeholder="CPF" required style="width: 205px; height: 40px;">-->
<!--            </div>-->


            <div id="abas">
                <ul>
                    <li id="aba1" class="selecionado"> Login</li>
                    <li id="aba2"> Cadastro</li>
                </ul>
            </div>


            <div id="conteudos">
                <div class="conteudo aba1">

                </div>
                <div class="conteudo aba2">
                    <form action="app/controllers/usuario.php?acao=cadastrar" method="post">
                        <div>

                            <div class="col-md-4 mb-3" style="color: #8e0000">
                                <label for="validationServer01">Nome</label>
                                <input type="text" class="form-control" id="validationServer01" name="nome" placeholder="Primeiro Nome" required style="width: 205px; height: 40px;">
                            </div>

                            <div class="col-md-4 mb-3" style="color: #8e0000">
                                <label for="validationServer02">Sobrenome</label>
                                <input type="text" class="form-control" id="validationServer02" placeholder="Último nome" required style="width: 205px; height: 40px;">
                            </div>

                            <div class="col-md-4 mb-3" style="color: #8e0000">
                                <label for="validationServerUsername">Usuário</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="validationServerUsername" name="usuario" placeholder="User" aria-describedby="inputGroupPrepend3" required style="width: 205px; height: 40px;">
                                </div>
                            </div>

                            <div class="col-md-6 mb-3" style="color: #8e0000">
                                <label for="validationServer03">Data de Nascimento</label>
                                <input type="date" class="form-control" id="validationServer03" name="data" placeholder="date" required style="width: 205px; height: 40px;">
                            </div>

                            <div class="col-md-3 mb-3" style="color: #8e0000">
                                <label for="validationServer04">Ocupação</label>
                                <input type="text" class="form-control" id="validationServer04" name="ocupacao" placeholder="Aluno/Servidor" required style="width: 205px; height: 40px;">
                            </div>

                            <div class="form-group" style="color: #8e0000; padding-left: 12px">
                                <label for="exampleInputPassword1">Senha</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" name="senha" placeholder="*********" style="width: 205px; height: 40px;">
                            </div>

                            <div class="col-md-3 mb-3" style="color: #8e0000">
                                <label for="validationServer05">CPF</label>
                                <input type="number" class="form-control" id="validationServer05" name="cpf" placeholder="CPF" required style="width: 205px; height: 40px;">
                            </div>
                </div>

                        <div class="form-group">
                            <div class="form-check" style="color: #8e0000">
                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck3" required>
                                <label class="form-check-label">
                                    Não sou um robô
                                </label>
                            </div>
                        </div>
                        <input type="submit" name="enviar" value="Enviar">
                    </form>
                </div>

                <!--LOGAR-->

            <div>
                <form action="app/controllers/usuario.php?acao=logar" method="post">
                    <input type="text" placeholder="Usuario" name="login">
                    <input type="password" placeholder="Senha" name="senha">
                    <input type="submit" name="entrar" value="Entrar">
                </form>
            </div>



        </div>

    </div>



</body>
</html>