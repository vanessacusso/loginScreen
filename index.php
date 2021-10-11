<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&display=swap" rel="stylesheet">

    <title>Login</title>
</head>
<body>
 
    <div class="userc">
        
    <form action="login.php" method="post" id="form">
        <h2>LOGIN</h2>
        <?php
            if(isset($_GET['error'])){
                echo "<p class='incorrect'><i class='fas fa-exclamation-triangle'></i> USUARIO E SENHA INCORRETOS</p>";
            }
        ?>

        <label class="label" for="user" alt="Insira seu usuario">Usuário
        <input type="text" name="login" id="user" class="input" placeholder="Login" required>
        </label>
        
        <label class="label" for="password" alt="Insira a senha">Senha
        <input type="password" name="senha" id="password" class="input" placeholder="Senha" minlength="6" required>
        </label>
        
        <input type="submit" value="ENTRAR" id="logar"><br>
    </form>
    </div>
    

</body>
</html>