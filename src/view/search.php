<?php
require_once "../../autoload.php";

use src\database\DatabaseCon;

require_once "header.php";
?>


<main>
    <div class="container">
        <h1 class="text-center">Resultados encontrados</h1>
        <?php
        $skipPost = 0;
        $postPerpage = 3;

        if (isset($_GET['p'])) {
            $skipPost = (intval($_GET['p']) - 1) * $postPerpage;
        }

        if (isset($_POST['q'])) {
            $q = $_POST['q'];
        }

        if (isset($_GET['q'])) {
            $q = $_GET['q'];
        }



        $posts = DatabaseCon::getAll("title like '%$q%' OR content like '%$q%'", "creation_date DESC", " $skipPost,$postPerpage", "posts");
        $numberOfPosts = ceil(sizeof(DatabaseCon::getAll("title like '%$q%' OR content like '%$q%'", "creation_date DESC", "", "posts")));
 
        foreach ($posts as $key => $post) {
            if ($key !== 0) { ?>
                <hr class="separador-all-blogs" style=" height: 0.5rem; background: #036819;">
            <?php   }

            ?>

            <div class="row">
                <div class="col-3 col-sm-3">
                    <div class="card">
                        <img src="../public/images/pixel.png" style="background-image:url(<?php echo $post->image ?>) ;" class="card-img-top post-image" alt="...">
                    </div>
                </div>
                <div class=" col-3 col-sm-3 card-body">
                    <a href="./post.php?id=<?php echo $post->id  ?>" style="text-decoration:none ; color:#575656">
                        <h5 class="card-title"><?php echo $post->title ?></h5>
                        <p class="card-text"><?php echo $post->content ?></p>
                    </a>
                </div>
            </div>
        <?php }
        ?>

        <nav aria-label="Page navigation ">
            <ul class="pagination">
                <?php

                for ($i = 1; $i <= ceil($numberOfPosts / $postPerpage); $i++) {  ?>

                    <li class="page-item"><a class="page-link" href="./search.php?p=<?php echo $i ?>&q=<?php echo $q ?>"><?php echo $i ?></a></li>

                <?php }
                ?>
            </ul>
        </nav>

    </div>

</main>

<?php
require_once "footer.php";
?>