<!DOCTYPE html>
<html lang="ru">
    <head>
        <title><?= $str_title ?> | Ассоциация "Лидер науки"</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link type="text/css" rel="stylesheet" href="<?= $this->createUrl('css/bootstrap.min.css') ?>"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="<?= $this->createUrl('css/bootstrap-grid.css') ?>"  media="screen,projection"/>

        <title>Hello, world!</title>
    </head>
    <body>
        <!--<nav class="navbar navbar-dark bg-primary">-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item ">
                        <a class="nav-link" href="/">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/services">Услуги</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/portfolio">Портфолио</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contacts">Контакты</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
        <?= $content; ?>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script type="text/javascript" src="<?= $this->createUrl('js/jquery-3.3.1.slim.min.js') ?>"></script>
        <script type="text/javascript" src="<?= $this->createUrl('js/popper.min.js') ?>"></script>
        <script type="text/javascript" src="<?= $this->createUrl('js/bootstrap.min.js') ?>"></script>
    </body>
</html>