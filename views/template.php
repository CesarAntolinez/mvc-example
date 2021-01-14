<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Example page</title>
    <!-- Plugins css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="https://img.favpng.com/10/0/3/anime-icon-away-icon-face-icon-png-favpng-kQqBnHR7jN8TxGRq3TJhqzewe.jpg" alt="" width="40" height="40" class="d-inline-block align-top">
            MVC
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <?php if (isset($_GET['page'])): ?>
                    <li class="nav-item">
                        <a class="nav-link <?= ($_GET['page'] == "home") ? "active" : "" ?>" aria-current="page" href="index.php?page=home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= ($_GET['page'] == "register") ? "active" : "" ?>" href="index.php?page=register">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= ($_GET['page'] == "login") ? "active" : "" ?>" href="index.php?page=login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=close_session">exit</a>
                    </li>
                <?php else: ?>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="index.php?page=home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="index.php?page=register">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=login">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=close_session">exit</a>
                </li>
                <?php endif;?>
            </ul>
        </div>
    </div>
</nav>

<?php
if (isset($_GET['page']))
{
    if ($_GET['page'] == "home" ||
        $_GET['page'] == "register" ||
        $_GET['page'] == "login" ||
        $_GET['page'] == "close_session")
    {
        include "views/pages/". $_GET['page'] . ".php";
    }else{
        include "views/error/404.php";
    }
}else{
    include "views/pages/register.php";
}
?>

<!-- Plugins JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>
</html>