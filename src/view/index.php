<?php

use src\database\DatabaseCon;

require_once "../../autoload.php";
require_once "header.php";

?>



<main>

    <!-- Banner e reders sociais  -->
    <div class="container pt-3 ">
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-8">
                    <div class="card-body">
                        <p class="card-text">
                            <h3>Venha fazer parte</h3>
                            Grupo Multidisciplinar para Inclusão Social (Grupo Brasil), hoje com o Projeto Praça Solidaria para atender prontamente a pandemia do Covid-19 em caráter emergencial
                            </p>
                    </div>
                    <div class="row m-2">
                        <div class="col-1">
                            <img src="../public/images/facebook.png" alt="icone facebook">
                        </div>

                        <div class="col-1">
                            <img src="../public/images/whatsapp.png" alt="icone whatsapp">

                        </div>

                        <div class="col-1">
                            <img src="../public/images/instagram.png" alt="icone instagram">

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
        <a href="./all-posts.php" style="text-decoration:none ;">
            <h4 class="m-2 text-center pb-3">Últimas postagens</h4>
        </a>


        <div class="row">


            <?php

            $posts = DatabaseCon::getAll(null, "creation_date DESC", "4", "posts");

            foreach ($posts as  $post) { ?>

                <div class="col-3 col-sm-3">
                    <a href="./post.php?id=<?php echo $post->id  ?>" style="text-decoration:none ;">
                        <div class="card">
                            <img src="../public/images/pixel.png" style="background-image:url(<?php echo $post->image ?>) ;" class="card-img-top post-image" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $post->title ?></h5>
                                <p class="card-text"><?php echo $post->content ?></p>
                            </div>
                        </div>
                    </a>
                </div>

            <?php }

            ?>

        </div>
    </div>

    <!-- Postagens insta -->

    <div class="container">
        <div class="row">
            <p class="text-end">Acompanhe nosso instagram.</p>
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
        <a href="#newsletter"></a>
        <div class="d-flex justify-content-center">
            <p class="text-center">Coloque seu melhor email e fique por dentro de tudo! </p>
        </div>

        <form action="../controller/newsletter.php" method="POST">
            <div class="d-flex input-group">
                <div class="p-2 flex-grow-1 bd-highlight ">
                    <input type="email" class="form-control" id="subscribe-newsletter" name="email">
                    <div class="valid-feedback">
                        Email válido!
                    </div>
                    <div class="invalid-feedback">
                        Digite um email válido!
                    </div>

                    <div class="alert alert-success invisible" role="alert" id="success-subscribe-newsletter">
                        Em breve você receberá todas as nossas novidades em seu email!
                    </div>
                    <div class="alert alert-danger invisible" role="alert" id="erro-subscribe-newsletter">
                        Erro ao cadastrar email, tente novamente mais tarde!
                    </div>
                    <div class="alert alert-danger invisible" role="alert" id="invalid-email">
                        Email inválido!
                    </div>

                </div>

                <div class="p-2 bd-highlight">
                    <button type="button" class="btn btn-primary" id="newsletter" onclick="subscribeNewsletter()">Receber atualizações</button>
                </div>
            </div>
        </form>



    </div>


</main>


<?php
require_once "footer.php";

?>
