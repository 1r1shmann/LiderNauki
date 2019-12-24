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
        <nav class="navbar navbar-expand-lg fixed-top justify-content-end">
            <div class="container">
                <a class="navbar-brand mr-auto mr-lg-0" href="#">Navbar</a>
                <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class=" offcanvas-collapse justify-content-md-center" >
                    <?php $this->renderPartial('layouts/_menu'); ?>
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
        <script type="text/javascript" src="<?= $this->createUrl('js/jquery-3.4.1.min.js') ?>"></script>
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