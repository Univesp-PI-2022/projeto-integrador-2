<?php
require_once "./src/view/header.php"

?>

<main>

    <!-- Alerta de doações necesssárias  -->
    <div class="container">
        <div class="alert alert-warning" role="alert">
            Estamos precisando de doação de arroz. Clique aqui para e saiba mais como nos ajudar!
        </div>
    </div>

    <!-- Carousel  -->
    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://media.istockphoto.com/photos/volunteer-with-donation-box-with-clothes-picture-id1309112046" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://media.istockphoto.com/photos/millennial-woman-is-taking-a-box-of-food-and-drink-at-the-food-and-picture-id1318880638" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://media.istockphoto.com/photos/donation-concept-the-volunteer-giving-a-donate-box-to-the-recipient-picture-id1353332258" class="d-block w-100" alt="...">
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

    <div class="container pt-3 ">
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-8">
                    <div class="card-body">
                        <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electro</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <img src="https://media.istockphoto.com/vectors/hand-drawn-doodle-food-donation-icon-illustration-isolated-vector-id1335421572" class="img-fluid rounded-start" alt="...">
                </div>
            </div>
        </div>
    </div>

    <!-- Postagens -->
    <div class="container">
        <h4 class="m-2">Últimas postagens</h4>
        <div class="row">
            <div class="col-3 col-sm-3">
                <a href="#" style="text-decoration:none ;">
                    <div class="card" style="width: 18rem;">
                        <img src="https://media.istockphoto.com/vectors/volunteering-charity-support-concept-tiny-volunteer-characters-in-vector-id1347952455" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Titulo da postagem</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <p class="card-text">ler mais...</p>

                        </div>
                    </div>
                </a>
            </div>
            <div class="col-3 col-sm-3">
                <a href="#" style="text-decoration:none ;">
                    <div class="card" style="width: 18rem;">
                        <img src="https://media.istockphoto.com/vectors/volunteering-charity-support-concept-tiny-volunteer-characters-in-vector-id1347952455" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Titulo da postagem</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <p class="card-text">ler mais...</p>

                        </div>
                    </div>
                </a>
            </div>
            <div class="col-3 col-sm-3">
                <a href="#" style="text-decoration:none ;">
                    <div class="card" style="width: 18rem;">
                        <img src="https://media.istockphoto.com/vectors/volunteering-charity-support-concept-tiny-volunteer-characters-in-vector-id1347952455" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Titulo da postagem</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <p class="card-text">ler mais...</p>

                        </div>
                    </div>
                </a>
            </div>
            <div class="col-3 col-sm-3">
                <a href="#" style="text-decoration:none ;">
                    <div class="card" style="width: 18rem;">
                        <img src="https://media.istockphoto.com/vectors/volunteering-charity-support-concept-tiny-volunteer-characters-in-vector-id1347952455" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Titulo da postagem</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <p class="card-text">ler mais...</p>

                        </div>
                    </div>
                </a>
            </div>

        </div>
    </div>

    <!-- Postagens insta -->

    <div class="container">
        <div class="row">

            <div class="col-3"></div>

        </div>

    </div>








</main>


<?php
require_once "./src/view/footer.php"

?>