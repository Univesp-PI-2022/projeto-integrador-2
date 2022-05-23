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

    <!-- Banner e reders sociais  -->
    <div class="container pt-3 ">
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-8">
                    <div class="card-body">
                        <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electro</p>
                    </div>
                    <div class="row m-2">
                        <div class="col-1">
                            <img src="./src/public/images/facebook .png" alt="icone facebook">
                        </div>

                        <div class="col-1">
                            <img src="./src/public/images/whatsapp.png" alt="icone facebook">

                        </div>

                        <div class="col-1">
                            <img src="./src/public/images/instagram.png" alt="icone facebook">

                        </div>
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
            <p class="text-end">Acompanhe nossas instagram.</p>
        </div>

        <div class="row">

            <div class="col">
                <div class="card" style="width: 25rem;">
                    <img src="https://img.freepik.com/free-vector/tiny-volunteers-sharing-canned-food-grocery-products-help-support-assistance-from-people-with-charity-cardboard-box-flat-vector-illustration-voluntary-delivery-humanitarian-aid-concept_74855-22077.jpg?w=2000" class="card-img-top" alt="...">
                </div>

            </div>

            <div class="col">

                <div class="row">
                    <div class="col imgs-insta">
                        <div class="card" style="width:8rem;">
                            <img src="https://img.freepik.com/free-vector/tiny-volunteers-sharing-canned-food-grocery-products-help-support-assistance-from-people-with-charity-cardboard-box-flat-vector-illustration-voluntary-delivery-humanitarian-aid-concept_74855-22077.jpg?w=2000" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="col imgs-insta">
                        <div class="card" style="width:8rem;">
                            <img src="https://img.freepik.com/free-vector/tiny-volunteers-sharing-canned-food-grocery-products-help-support-assistance-from-people-with-charity-cardboard-box-flat-vector-illustration-voluntary-delivery-humanitarian-aid-concept_74855-22077.jpg?w=2000" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="col imgs-insta">
                        <div class="card" style="width:8rem;">
                            <img src="https://img.freepik.com/free-vector/tiny-volunteers-sharing-canned-food-grocery-products-help-support-assistance-from-people-with-charity-cardboard-box-flat-vector-illustration-voluntary-delivery-humanitarian-aid-concept_74855-22077.jpg?w=2000" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="col imgs-insta">
                        <div class="card" style="width:8rem;">
                            <img src="https://img.freepik.com/free-vector/tiny-volunteers-sharing-canned-food-grocery-products-help-support-assistance-from-people-with-charity-cardboard-box-flat-vector-illustration-voluntary-delivery-humanitarian-aid-concept_74855-22077.jpg?w=2000" class="card-img-top" alt="...">
                        </div>
                    </div>
                </div>

                <div class="row pt-2">
                    <div class="col imgs-insta">
                        <div class="card" style="width:8rem;">
                            <img src="https://img.freepik.com/free-vector/tiny-volunteers-sharing-canned-food-grocery-products-help-support-assistance-from-people-with-charity-cardboard-box-flat-vector-illustration-voluntary-delivery-humanitarian-aid-concept_74855-22077.jpg?w=2000" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="col imgs-insta">
                        <div class="card" style="width:8rem;">
                            <img src="https://img.freepik.com/free-vector/tiny-volunteers-sharing-canned-food-grocery-products-help-support-assistance-from-people-with-charity-cardboard-box-flat-vector-illustration-voluntary-delivery-humanitarian-aid-concept_74855-22077.jpg?w=2000" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="col imgs-insta">
                        <div class="card" style="width:8rem;">
                            <img src="https://img.freepik.com/free-vector/tiny-volunteers-sharing-canned-food-grocery-products-help-support-assistance-from-people-with-charity-cardboard-box-flat-vector-illustration-voluntary-delivery-humanitarian-aid-concept_74855-22077.jpg?w=2000" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="col imgs-insta">
                        <div class="card" style="width:8rem;">
                            <img src="https://img.freepik.com/free-vector/tiny-volunteers-sharing-canned-food-grocery-products-help-support-assistance-from-people-with-charity-cardboard-box-flat-vector-illustration-voluntary-delivery-humanitarian-aid-concept_74855-22077.jpg?w=2000" class="card-img-top" alt="...">
                        </div>
                    </div>
                </div>


            </div>



        </div>

    </div>

    <!-- Assinar email postagem  -->

    <div class="container pt-3">

        <div class="d-flex justify-content-center">
            <p class="text-center">Coloque seu melhor email e fique por dentro de tudo! </p>
        </div>

        <form>
            <div class="d-flex ">
                <div class="p-2 flex-grow-1 bd-highlight"><input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"></div>
                <div class="p-2 bd-highlight"> <button type="submit" class="btn btn-primary">Submit</button></div>
            </div>
        </form>
    </div>








</main>


<?php
require_once "./src/view/footer.php"

?>