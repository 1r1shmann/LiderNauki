<?php

namespace app\components;

class Helper {

    public static function contollerFolderName($controllerName) {
        return str_ireplace('controller', '', $controllerName);
    }

    public static function mb_ucfirst($string, $enc = 'UTF-8') {
        return mb_strtoupper(mb_substr($string, 0, 1, $enc), $enc) .
                mb_substr($string, 1, mb_strlen($string, $enc), $enc);
    }
    
    public static function createMailBody($message){
        return '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
                <html xmlns="http://www.w3.org/1999/xhtml">
                <head>
                    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                    <meta name="viewport" content="width=device-width"/>
                    <style>
                        *{margin:0;padding:0;font-size:100%;font-family:"Avenir Next","Helvetica Neue",Helvetica,Helvetica,Arial,sans-serif;line-height:1.65}img{max-width:100%;margin:0 auto;display:block}.body-wrap,body{width:100%!important;height:100%;background:#efefef;-webkit-font-smoothing:antialiased;-webkit-text-size-adjust:none}a{color:#007bff;text-decoration:none;background-color:transparent}a:hover{color:#0056b3;text-decoration:underline}.text-center{text-align:center}.text-right{text-align:right}.text-left{text-align:left}.button{display:inline-block;color:#fff;background:#0e47a1;border:solid #0e47a1;border-width:10px 20px 8px;font-weight:700;border-radius:4px}h1,h2,h3,h4,h5,h6{margin-bottom:20px;line-height:1.25}h1{font-size:32px}h2{font-size:28px}h3{font-size:24px}h4{font-size:20px}h5{font-size:16px}ol,p,ul{font-size:16px;font-weight:400;margin-bottom:20px}.container{display:block!important;clear:both!important;margin:0 auto!important;max-width:900px!important}.container table{width:100%!important;border-collapse:collapse}.container .masthead{padding:80px 0;background:#0e47a1;color:#fff}.container .masthead h1{margin:0 auto!important;max-width:90%;text-transform:uppercase}.container .content{background:#fff;padding:30px 35px}.container .content.footer{background:0 0}.container .content.footer p{margin-bottom:0;color:#888;text-align:center;font-size:14px}.container .content.footer a{color:#007bff;text-decoration:none;font-weight:700;background-color:transparent}.container .content.footer a:hover{color:#0056b3;text-decoration:underline}
                    </style>
                </head>
                <body>
                <table class="body-wrap">
                    <tr>
                        <td class="container">
                            <table>
                                <tr>
                                    <td align="center" class="masthead">
                                        <h1>Ассоциация «Лидер науки»</h1>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="content">
                                        '.$message.'
                                        <p>------</p>
                                        <p>Ассоциация «Лидер науки» проводит дистанционные образовательные конкурсы и 
                                        международные интернет олимпиады для дошкольников и школьников начальных, 
                                        средних и старших классов, студентов ВУЗов и СПО, а также для преподавателей 
                                        любых учебных заведений. Массовые соревнования для взрослых и детей в возрасте от 3 лет.</p>
                                        <p>Вы получили это сообщение, потому что Ваш e-mail был зарегистрирован на сайте <a href="http://'.$_SERVER['HTTP_HOST'].'">Ассоциация «Лидер науки»</a><br>
                                        Если данное письмо попало к Вам по ошибке, пожалуйста, проигнорируйте его и примите наши извинения.</p>
                                        <p></p>
                                        <p>С наилучшими пожеланиями,<br>
                                        <em>Администрация сайта <a href="http://'.$_SERVER['HTTP_HOST'].'">Ассоциация «Лидер науки»</a></em></p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td class="container">
                            <table>
                                <tr>
                                    <td class="content footer" align="center">
                                        <p>© 2014-2020 Ассоциация "Лидер Науки"</p>
                                        <p>
                                            <a href="http://'.$_SERVER['HTTP_HOST'].'/main/confidentiality">Конфиденциальность</a> | 
                                            <a href="http://'.$_SERVER['HTTP_HOST'].'/main/offer">Договор-оферта</a> | 
                                            <a href="http://'.$_SERVER['HTTP_HOST'].'/main/help">Помощь</a>
                                        </p>
                                    </td>
                                </tr>
                            </table>

                        </td>
                    </tr>
                </table>
                </body>
                </html>';
    }

}
