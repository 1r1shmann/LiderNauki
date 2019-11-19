<!DOCTYPE html>
<html>
    <head>
        <title>TEST Контроллер</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="Robots" content="all"> 
        <meta name="yandex" content="all">
        <meta name="googlebot" content="all">
        <meta name="Revisit-After" content="1 Days">
        <meta name="description" content="Ассоциация лидер науки проводит дистанционные образовательные конкурсы, и международные интернет олимпиады для дошкольников и школьников начальных, средних и старших классов, студентов ВУЗов и СПО а также для преподавателей любых учебных заведений. Массовые соревнования для детей в возрасте от 3 лет и взрослых.">
        <meta name="keywords" content="конкурсы для детей начальной средней и старшей школы, интернет онлайн олимпиады для школьников дошкольников, студентов и преподавателей, 2015, 2016, 2017 международные интеллектуальные конкурсы для школьников студентов преподавателей, лидер, науки, ассоциация, викторины, курсы, конкурсы, олимпиады, курсы для студентов и преподавателей, ">
        <meta property="og:title" content="Дистанционные конкурсы олимпиады курсы, международные интернет олимпиады для дошкольников и школьников начальных, средних и старших классов, студентов ВУЗов и СПО а также для преподавателей любых учебных заведений. Массовые соревнования для детей в возрасте от 3 лет и взрослых">
        <meta property="og:type" content="website">
        <meta property="og:description" content="Ассоциация лидер науки проводит дистанционные образовательные конкурсы, и международные интернет олимпиады для дошкольников и школьников начальных, средних и старших классов, студентов ВУЗов и СПО а также для преподавателей любых учебных заведений. Массовые соревнования для детей в возрасте от 3 лет и взрослых.">
        <meta name="theme-color" content="#336699">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        
        <link rel="shortcut icon" type="image/x-icon" href="css/favicon.png">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    </head>
    <body>

        <nav>
            <div class="nav-wrapper blue darken-3 ">
                <div class="container">
                    <!--<a href="#!" class="brand-logo">ОЛОЛОША TEAM</a>-->
                    <a href="#" data-target="mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="/">Главная</a></li>
                        <li><a href="/services">Услуги</a></li>
                        <li><a href="/portfolio">Портфолио</a></li>
                        <li><a href="/contacts">Контакты</a></li>
                    </ul>
                </div>
                <ul class="sidenav" id="mobile">
                    <li><a href="/">Главная</a></li>
                    <li><a href="/services">Услуги</a></li>
                    <li><a href="/portfolio">Портфолио</a></li>
                    <li><a href="/contacts">Контакты</a></li>
                </ul>
            </div>
        </nav>
        <div class="container">
            <?php include $view; ?>
        </div>
        <footer class="page-footer blue darken-3">
            <div class="container">
                <div class="row">
                    <div id="contacts" class="col l4 s12">
                        <h5 class="white-text">Контакты</h5>
                        <ul>
                            <li class="white-text">E-mail: <a class="grey-text text-lighten-3" href="mailto:Support@lidernaiuki.ru">Support@lidernauki.ru</a></li>
                            <li class="white-text">Телефон: +7 (917) 449-40-97</li>
                        </ul>

                    </div>
                    <div class="col l4 s12">
                        <div class="row">
                            <div class="col s6">
                                <a class="grey-text text-lighten-3" href="http://ugatu.su"><img width="70%" src="images/partners/ugatu.png"/></a>
                            </div>	
                            <div class="col s6">
                                <a class="grey-text text-lighten-3" href="#"><img width="100%" src="images/partners/svvosmi.jpg"/></a>
                            </div>				
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    &copy; 2015 - 2019 Ассоциация "Лидер науки"
                </div>
            </div>
        </footer>
        <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                M.AutoInit();
            });
        </script>
    </body>
</html>