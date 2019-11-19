<?php

namespace App\Core;

class Controller {

    public $model;
    public $view;

    // действие (action), вызываемое по умолчанию
    function actionIndex() {
        // todo	
    }

    //render
    function render($content_view, $data = null, $template_view = 'default.php') {

        if (!mb_stripos($content_view, '/')) {
            
        }


        if (is_array($data)) {

            // преобразуем элементы массива в переменные
            extract($data);
        }

        include 'app/views/templates/' . $template_view;
    }

    function renderPartial($content_view, $data = null) {
        include $content_view;
    }

    function getClassName($class) {
        $class = is_object($class) ? get_class($class) : $class;
        return basename(str_replace('\\', '/', $class));
    }

}
