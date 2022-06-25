<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="../public/style/index-css.css">
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="../public/scripts/index-js.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


    <title>Praça Solidária - PI-II-MMXXII</title>
</head>

<body class="sem_margem bg-light ">
    <!-- NavBar -->

    <div class="sem_margem">
        <nav class="navbar navbar-expand-lg navbar-light bg-light" id = "menu">
            <div class="container-fluid">
                <a id="logo" href="">ONG Projeto Brasil </class></a>
                    
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Início</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="quem-somos.php">Quem somos</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="nossos-projetos.php">Nossos projetos</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="contato.php">Ente em contato</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="blog.php">Blog</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="admin.php">Entre</a>
                        </li>


                    </ul>
                    <form class="d-flex" method="POST" action="../view/search.php">
                        <input class="form-control me-2" type="search" name="q" placeholder="Busque por uma postagem" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Buscar</button>
                    </form>
                </div>
            </div>
        </nav>

        <!-- Alerta de doações necesssárias  -->
        <div class="sem_margem">
            <div class="alert alert-warning" role="alert" id = "aviso">
                <center>Estamos precisando de doação de arroz. Clique aqui para e saiba mais como nos ajudar!</center>
            </div>
        </div>

        <!-- Carousel  -->
        <div class="sem_margem">
            <div id="carouselExampleIndicators" class="carousel slide sem_margem" data-bs-ride="carousel">
                <div class="carousel-indicators sem_margem">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner sem_margem">
                    <div class="carousel-item active">
                        <img src="../public/images/Slide_1.png" class="d-block w-100" alt="festa na praça solidaria">
                    </div>
                    <div class="carousel-item">
                        <img src="../public/images/Slide_2.png" class="d-block w-100" alt="cachorro na coberta">
                    </div>
                    <div class="carousel-item">
                        <img src="../public/images/Slide_3.png" class="d-block w-100" alt="foto de um pão caseiro">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
