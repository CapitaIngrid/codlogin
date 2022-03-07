<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title> Exemplo soma de dois números</title>
    </head>
    <body>
    <h2>Formulário para soma de dois números</h2>
        <form id="form1" name="form1" method="post" action="ifelse.php">
            <p>
            <label for="frase">Informe o login:</label>
            <input name="login" type="text" id="login" size="5" maxlength="5" />
            </p>
            <p>
            <label for="frase">Informe a senha:</label>
            <input name="senha" type="text" id="senha" size="5" maxlength="5" />
            </p>
            <p>
            <input type="submit" name="submit" id="submit" value="Calcular" />
            <input type="reset" name="reset" id="reset" value="Limpar" />
            </p>
        </form>
    </body>
</html>