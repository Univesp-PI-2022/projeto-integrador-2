<?php
require_once "config.php";




if (password_verify('#Rcs84169130', "$2y$10$2TLa7yDiJz344/G1BCsl6uACsvy3lYwu66kwIUMQ26QdDOvxOx2G6")) {
    echo 'Password is valid!';
} else {
    echo 'Invalid password.';
}