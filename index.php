<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial | BEM VINDO</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat&family=Poppins:wght@800&display=swap');

    * {
        box-sizing: border-box;
        padding: 0; margin: 0;
        font-family: 'Montserrat', sans-serif;
    }

    a {
        color: white;
        text-decoration: none;
    }

    ul, li {
        margin: 0px;
        list-style-type: none;
    }

    .title-page {
        height: 80vh;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
    }

    .content-page {
        margin: 50px;
    }

    .overlay {
        height: 100%;
        width: 100%;
        background-color: rgba(128, 0, 128, 0.20);
    }

    nav {
        text-transform: uppercase;
    }

    .wrap-menu-header {
        width: 100%;
        top: 0;
        left: 0;
        font-size: 15px;
        z-index: 150;
    }

    .menu {
        display: flex;
        justify-content: space-around;
        align-items: center;
        width: 100%;
        background: none;
        padding-bottom: 0.75rem;
        padding-top: 0.75rem;
        position: absolute;
        z-index: 1;
        color: white;
        top: 0;
    }

    .menu ul li a {
        color: rgb(153, 2, 153);
    }

    .list-section ul li{
        float: left;
        padding: 0px 3px;
    }

    .login-section {
        padding: 0px 4.5px;
    }

    .logo {
        text-align: center;
        height: 35px;
        text-align: center;
    }

    .logo > a{
        display: block;
        height: 100%;
        font-size: 30px;
        color: rgb(153, 2, 153);
    }
    
    .btn-user {
        color: rgb(153, 2, 153);
        background: none;
        border: rgb(153, 2, 153) solid 0.1rem;
        border-radius: 50px;
        text-transform: uppercase;
        padding: 0.375rem 1rem;
        cursor: pointer;
    }

    .btn-user:hover{
        color: white;
        background: rgb(153, 2, 153);
        border: rgb(153, 2, 153) solid 0.1rem;
        transition: 0.4s;
    }

    .wrap-content-title {
        font-family: 'Poppins', sans-serif;
        font-weight: 1000;
        font-size: 80px;
        line-height: 1;
        margin-bottom: 10px;
    }

    .wrap-content-text {
        width: 60%;
    }

    .section-divisor {
        padding: 70px 50px;
        background-color: purple;
    }

    .image-content {
        width: 100%;
        background-image: url(img/mulher2.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        margin: 30px;
    }
</style>
<body>
    <!-- Navbar -->
    <header>
        <div class="wrap-menu-header">
            <nav class="menu">
                <div class="list-section">
                    <ul>
                        <li><a href="academias.php" style="margin-right: 10px;">Academias</a></li>
                        <li><a href="itens.php">Itens</a></li>
                    </ul>
                </div>
                <div class="logo">
                    <!-- Logo -->
                    <a href="index.php">
                        LOGO
                    </a>
                </div>
                <div class="list-section">
                    <ul>
                        <li><a href="logarusu.php">Logar</a></li>
                        <?php 
                        if(!isset($_SESSION["useruid"])){
                            echo '<li><a class="btn-user" style="margin-left: 10px;" href="criarusu.php">Cadastrar</a></li>';
                        } ?>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <!-- Title Page/Início -->
    <section class="title-page" style="background-image: url('img/academia.jpg');">
        <div class="overlay"></div>
    </section>

    <!-- Conteúdo -->
    <section class="content-page">
        <div class="wrap-content-title">
            <span>Em Busca do</span><br>
            <span style="color: rgb(153, 2, 153);">BEM ESTAR</span><br>
            <span>Geral</span>
        </div>
        
        <div class="wrap-content-text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam nobis quibusdam consequuntur dolore labore dolores, optio itaque natus dolor blanditiis, iste temporibus? Neque veniam asperiores non reprehenderit explicabo dignissimos sint.
        </div>
    </section>

    <!-- Divisor -->
    <section class="section-divisor">
    <div class="wrap-content-title">
            <span style="color: white;">Passe livre com</span><br>
            <span style="color: rgb(153, 0, 153);">GYMPASS</span><br>
        </div>
        
        <div class="wrap-content-text" style="color: white;">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam nobis quibusdam consequuntur dolore labore dolores, optio itaque natus dolor blanditiis, iste temporibus? Neque veniam asperiores non reprehenderit explicabo dignissimos sint.
        </div>
    </section>

    <!-- Footer -->
    <footer style="background-color: rgb(35, 27, 34); color: white; text-align: center; padding: 20px 0;">
        Feito por CARLOS EDUARDO BISPO DO NASCIMENTO da INF 261
    </footer>
</body>
</html>