<?PHP
    $login = $_POST["login"];
    $senha = $_POST["senha"];
    
    if ($login == "aluno" && $senha == "etec")
    {
        echo "Acesso permitido!";
    } 
    else
    {
        echo "Acesso negado!";
    }
?>             