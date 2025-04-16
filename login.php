<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fluxora</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"/>
</head>
<body>
    <div class="wrapper">
        <section class="form login">
            <header>Fluxora</header>
            <form action="#">
                <div class="error-txt"></div>
                <div class="field input">
                    <label>Email</label>
                    <input type="text" name="email" placeholder="exemplo@gmail.com">
                </div>
                <div class="field input">
                    <label>Senha</label>
                    <input type="password" name="password" placeholder="suasenha123">
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field button">
                    <input type="submit" value="Entrar">
                </div>
            </form>
            <div class="link">Não possui uma conta? <a href="index.php">Cadastrar</a></div>
        </section>
    </div>
    
    <script src="javascript/pass-show-hide.js"></script>
    <script src="javascript/login.js"></script>

</body>
</html>