<?php

namespace app\components;

use \PHPMailer\PHPMailer\PHPMailer;
use app\core\Config;

class MailSender extends PHPMailer{
    public $Mailer = 'smtp';
    public $Host = Config::SMTP_HOST; 
    public $SMTPAuth = true; 
    public $Username = Config::SMTP_LOGIN;
    public $Password = Config::SMTP_PASS;
    public $SMTPSecure = 'ssl'; 
    public $Port = Config::SMTP_PORT;
    public $From = Config::SMTP_EMAIL;
    public $FromName = Config::SMTP_EMAIL_NAME;
    public $CharSet = Config::SMTP_CHARSET;
    public $ContentType = 'text/html';
}
