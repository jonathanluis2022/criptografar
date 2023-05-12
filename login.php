
<?php


    if(isset($_POST['email'])) {
        include('conexao.php');

        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql_code = "SELECT * FROM senhas WHERE email = '$email' LIMIT 1";
        $sqli_exec = $mysqli->query($sql_code) or die($mysqli->error);
        
        $usuario = $sqli_exec->fetch_assoc();

        if(password_verify($senha, $usuario['senha'])) {
            echo "usuario logado ";
        }else {
            echo 'senha ou email incorretos ';
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="" method='POST'>
        <input type="text" name='email'>
        <input type="text" name='senha'>
        <button type='submit'> LOGAR </button>
    </form>
    
</body>
</html>