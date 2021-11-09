<?php
        require "funcoesLoginEntrar.php";
        require "configPTCC.php";

        cabecalho("Cadastro");

        echo "<h1>Cadastro de Usuario</h1>
    
          <form action=\"gravaLogin.php\" method=\"post\" class=\"form-control-inline\">
            <label>NOME
                <input type=\"text\" name=\"txtUSU_NOME\" size=\"50\" maxlength=\"100\" class=\"form-control\">
            </label><p>
            <label>CELULAR
                <input type=\"text\" name=\"txtUSU_CELULAR\" size=\"50\" maxlength=\"100\" class=\"form-control\">
            </label><p>
            <label>E-MAIL
                <input type=\"email\" name=\"txtUSU_EMAIL\" size=\"50\" maxlength=\"100\" class=\"form-control\">
            </label><p>
            <label>SENHA
                <input type=\"password\" name=\"txtUSU_SENHA\" size=\"50\" maxlength=\"100\" class=\"form-control\">
            </label> <p>
                <input type=\"submit\" value=\"Gravar\" class=\"btn btn-primary\">
                <input type=\"reset\" value=\"Limpar\" class=\"btn btn-primary\">
                <a href=\"index.php\">Login</a>
        </form>";

        $consulta = $pdo->prepare("Select * from TB_USUARIO order by USU_ID");
        $consulta->execute();


        rodape();
?>



