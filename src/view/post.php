<?php
require_once "../../autoload.php";

use src\database\DatabaseCon;

require_once "header.php";
?>


<main>
    <div class="container">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
            $idPost = $_GET['id'];
            $post = DatabaseCon::getOne($idPost, "posts");

            if (!$post) {
                header("Location: ./index.php");
                exit;
            }

        ?>

            <h1 class="text-center p"><?php echo $post->title ?></h1>

            <div class="card">
                <img src="../public/images/pixel.png" style="background-image:url(<?php echo $post->image ?>) ;" class="card-img-top post-image" alt="...">
            </div>
            <br><br><br>
            <p class="card-text "><?php echo $post->content ?></p>

        <?php
        } else {
            header("Location: ./index.php");
            exit;
        }
        ?>






    </div>

</main>

<?php
require_once "footer.php"

?>