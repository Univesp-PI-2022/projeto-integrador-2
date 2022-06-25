<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="../public/scripts/admin.js"></script>
    <script src="../public/scripts/blog.js"></script>
    <title>Area Administrativa</title>
</head>
<style>
    img {
        width: 100%;
        height: 100%;
    }
</style>

<body>

    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <span class="fs-5 d-none d-sm-inline">Menu</span>
                    </a>
                    
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">

                        <!-- HOME -->
                        
                        <li class="nav-item">
                            <a href="../view/index.php" class="nav-link align-middle px-0">
                                <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Voltar para o site</span>
                            </a>
                        </li>
                        
                        
                        <!-- AREA LOGADA -->
                        
                        <?php
                        // LOGIN
                        if(!isset($_SESSION['user']) || $_SESSION['user']==null){
                        ?>
                        
                            <li>
                                <a href="#" class="nav-link px-0 align-middle" onclick="toggleDiv('form-user-login')">
                                    <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Login</span> </a>
                            </li>
                        
                        <?php
                        }else{
                        // MOSTRA MENU
                        ?>    
                         
                            <!-- BLOG -->
                            
                            <li>
                                <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                                    <i class="fs-4 bi-bootstrap"></i> <span class="ms-1 d-none d-sm-inline">Blog</span></a>
                                <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                                    <li class="w-100">
                                        <a href="#" class="nav-link px-0" onclick="toggleDiv('blog-create-post')"> <span class="d-none d-sm-inline" id="blog-new-post">Criar Postagem</span></a>
                                    </li>
                                    <li>
                                        <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Listar Posts</span></a>
                                    </li>
                                </ul>
                            </li>

                            <!-- CADASTRO DE USUARIOS -->
                        
                            <li>
                                <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                    <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Usuários</span> </a>
                                <ul class="collapse nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                                    <li class="w-100">
                                        <a href="#" class="nav-link px-0" onclick="toggleDiv('form-user-registration')"> <span class="d-none d-sm-inline">Cadastrar usuário</span></a>
                                    </li>
                                    <li class="w-100">
                                        <a href="#" class="nav-link px-0" onclick=""> <span class="d-none d-sm-inline">Exibir usuários</span></a>
                                    </li>
                                </ul>
                            </li>
                            
                        <?php    
                        } //end if   
                        ?>


                    </ul>
                    <hr>
                </div>
            </div>

            <!-- AREA LOGADA -->

            <?php
            // ABRE PAINEL DE LOGIN
            if(!isset($_SESSION['user']) || $_SESSION['user']==null){
            ?>
                <div class="container " id="form-user-login">

                    <?php

                    if (isset($_POST["user"]) && isset($_POST["password"])) {
                        
                        //VERIFICAR LOGIN NO DB
                        
                        //usario ADMIN hardcoded para fins de teste
                        if($_POST["user"]=="admin" && $_POST["password"]=="1nt3Gr@d0r"){
                            $_SESSION["user"]=$_POST["user"];
                            ?><script>window.location.href="<?php echo $_SERVER['PHP_SELF']; ?>"</script><?php
                        }else{
                            $_SESSION["user"]=null;
                            ?><div class="alert alert-danger mt-3" role="alert">
                                Credenciais inv&aacute;lidas!
                            </div><?php

                        }
                        
                    }

                    ?>



                    <form class=" g-3 needs-validation p-5" method="POST">

                        <div class="col-md-4">
                            <label for="name" class="form-label">Nome de usuario</label>
                            <input type="text" class="form-control" name="user" id="name" required>
                            <div class="invalid-feedback">
                                Digite seu nome de usuário
                            </div>
                            <div class="valid-feedback">
                                Dado válido!
                            </div>

                        </div>

                        <div class="col-md-4">
                            <label for="password" class="form-label">Senha</label>
                            <div class="input-group ">
                                <input type="password" class="form-control" name="password" id="password" required>
                                <div class="valid-feedback">
                                    Digite sua senha
                                </div>
                                <div class="invalid-feedback">
                                    Dado inválido!
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <button class="btn btn-primary" type="submit">Entrar</button>
                        </div>
                    </form>
                </div>

            <?php
            }else{
            // PERMITE ACESSO A PAINEIS DE ADMIN
            ?>    

                <!-- BLOG -->
                <h3>Blog - Postagens</h3>

                <div class="container" id="blog-create-post">
                    <?php

                    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['status'])) {
                        if ($_GET['status'] === "success-create-post") { 
                            ?><div class="alert alert-success mt-3" role="alert">
                                Postagem criada com sucesso!
                            </div><?php
                        }
                    }
                    ?>

                    <?php


                    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['status'])) {
                        if ($_GET['status'] === "error01") { 
                            ?><div class="alert alert-danger mt-3" role="alert">
                                Falha ao criar, tente novamente mais tarde.
                            </div><?php
                        }
                    }
                    ?>

                    <form class=" g-3 needs-validation p-5" action="../controller/create-post.php" method="POST" enctype="multipart/form-data">

                        <div class="col-md-4">
                            <label for="name" class="form-label">Título</label>
                            <input type="text" class="form-control" name="post[title]" id="post-title" required>
                        </div>

                        <div class="col-md-4">
                            <label for="content" class="form-label">Texto</label>
                            <textarea class="form-control" aria-label="" name="post[content]" id="post-content" required></textarea>
                        </div>

                        <div class="col-md-4">
                            <label for="image" class="form-label">Imagem</label>
                            <input type="file" class="form-control pt-2" name="image" id="post-image" required>
                        </div>

                        <div class="col-12 pt-2">
                            <button class="btn btn-primary" type="submit">Criar postagem</button>
                        </div>
                    </form>
                </div>

                <!-- CADSTRO DE USUARIOS -->
                <h3>Usuários - Cadastro</h3>

                <div class="container " id="form-user-registration">

                    <?php

                    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['status'])) {
                        if ($_GET['status'] === "success-add-user") { 
                            ?><div class="alert alert-success mt-3" role="alert">
                                Usuários cadastrado com sucesso!
                            </div><?php
                        }
                    }
                    ?>

                    <?php

                    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['status'])) {
                        if ($_GET['status'] === "error01") { 
                            ?><div class="alert alert-danger mt-3" role="alert">
                                Todos os campos devem estar preenchidos!
                            </div><?php
                        }
                    }

                    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['status'])) {
                        if ($_GET['status'] === "error02") { 
                            ?><div class="alert alert-danger mt-3" role="alert">
                                Falha ao inserir usuário, tente novamente mais tarde.
                            </div><?php
                        }
                    }
                    ?>

                    <form class=" g-3 needs-validation p-5" action="../controller/add-user.php" method="POST">

                        <div class="col-md-4">
                            <label for="name" class="form-label">Nome completo</label>
                            <input type="text" class="form-control" name="user[name]" id="name" required>
                            <div class="invalid-feedback">
                                Digite seu nome completo!
                            </div>
                            <div class="valid-feedback">
                                Nome válido!
                            </div>

                        </div>

                        <div class="col-md-4">
                            <label for="email" class="form-label">Email</label>
                            <div class="input-group ">
                                <input type="email" class="form-control" name="user[email]" id="email" required>
                                <div class="valid-feedback">
                                    Email válido!
                                </div>
                                <div class="invalid-feedback">
                                    Digite um email válido!
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <label for="password" class="form-label">Senha</label>
                            <div class="input-group ">
                                <input type="password" class="form-control" name="user[password]" id="password" required>
                                <div class="valid-feedback">
                                    Senha válida!
                                </div>
                                <div class="invalid-feedback">
                                    Sua senha deve ter:
                                    <ul>
                                        <li>Deve ter tamanho mínimo 6 e no máximo 30 caracteres</li>
                                        <li> Deve ter somente letras e numero e caractere especial(!#@$%&)</li>
                                        <li>Deve ter no mínimo uma letra maiúscula e minúscula</li>
                                        <li> Deve ter no mínimo um número</li>
                                        <li> Deve ter no mínimo caractere especial(!#@$%&)</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <button class="btn btn-primary" type="submit">Cadastrar</button>
                        </div>
                    </form>
                </div>

            <?php    
            } //end if   
            ?>

        </div>
    </div>


    <!--div class="container">
        <div class="d-flex align-items-start">
            <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</button>
                <button class="nav-link" id="v-pills-user-registration-tab" data-bs-toggle="pill" data-bs-target="#v-pills-user-registration" type="button" role="tab" aria-controls="v-pills-user-registration" aria-selected="false">Cadastrar usuário</button>
                <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</button>
                <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</button>
            </div>
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                    <div class="container">

                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-user-registration" role="tabpanel" aria-labelledby="v-pills-user-registration-tab">

                </div>
                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
            </div>
        </div>
    </div-->

</body>

</html>
