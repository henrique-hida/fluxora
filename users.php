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
        <section class="users">
            <header>
                <div class="content">
                    <img src="img.png" alt="">
                    <div class="details">
                        <span>Henrique Hida</span>
                        <p>Online</p>
                    </div>
                </div> 
                <a href="#" class="logout">Sair</a>
            </header>
            <div class="search">
                <span class="text">Selecione uma conversa</span>
                <input type="text" placeholder="Insira um nome para pesquisar">
                <button><i class="fas fa-search"></i></button>
            </div>
            <div class="users-list">
                <a href="#">
                   <div class="content">
                        <img src="img.png" alt="">
                        <div class="details">
                            <span>Henrique Hida</span>
                            <p>Mensagem de teste</p>
                        </div>
                   </div> 
                   <div class="status-dot"><i class="fas fa-circle"></i></div>
                </a>
            </div>
        </section>
    </div>

    <script src="javascript/users.js"></script>
    
</body>
</html>