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
        <link type="text/css" rel="stylesheet" href="<?= $this->createUrl('css/style.css') ?>"  media="screen,projection"/>
        <link rel="shortcut icon" type="image/x-icon" href="<?= $this->createUrl('images/favicon.png') ?>">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark justify-content-end">
            <div class="container">
                <a class="navbar-brand mr-auto mr-lg-0" href="#">Navbar</a>
                <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class=" offcanvas-collapse justify-content-md-center" >
                    <ul class="navbar-nav mr-auto ">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Главная</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="/services">Услуги</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/portfolio">Портфолио</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contacts">Контакты</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Settings</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown01">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li> 
                        <li class="nav-item">
                            <form class="form-inline" action="/portfolio" method="GET">
                                <input class="form-control mr-sm-2" name="asd" type="text" placeholder="Введите запрос..." aria-label="Search">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Поиск</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <?= $content; ?>

        
        <footer class="footer text-muted text-center text-small">
            <div class="mb-0 p-0">© 2014-<?= date('Y') ?> Ассоциация "Лидер Науки"</div>
            <ul class="list-inline mt-0 p-0">
                <li class="list-inline-item"><a href="#">Конфиденциальность</a></li>
                <li class="list-inline-item"><a href="#">Правила</a></li>
                <li class="list-inline-item"><a href="#">Помощь</a></li>
            </ul>
        </footer>
        <!-- Optional JavaScript -->
        <script type="text/javascript" src="<?= $this->createUrl('js/jquery-3.3.1.slim.min.js') ?>"></script>
        <script type="text/javascript" src="<?= $this->createUrl('js/popper.min.js') ?>"></script>
        <script type="text/javascript" src="<?= $this->createUrl('js/bootstrap.min.js') ?>"></script>
        <script type="text/javascript">
            $(function () {
                $('[data-toggle="offcanvas"]').on('click', function () {
                    $('.offcanvas-collapse').toggleClass('open')
                })
            })
        </script>
    </body>
</html>