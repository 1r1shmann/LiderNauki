<ul class="navbar-nav mr-auto ">
    <?php
        $url = preg_replace('/^\//', '', preg_replace('/\/$/', '', $_SERVER['REQUEST_URI']));
        foreach ($this->config->menu as $key => $item) {
            $active = ($url === $item['url']) ? ' active' : '';
            $hasSub = isset($item['sub']) && is_array($item['sub']);
            $subClass = $hasSub ? 'dropdown' : '';
            
            
            $visibility_flag = false;
            
            if((isset($_SESSION['auth']) && $_SESSION['auth'] === true) && in_array('auth', $item['visibility'])){
                $visibility_flag = true;
            } elseif((!isset($_SESSION['auth']) || $_SESSION['auth'] === false) && in_array('nonauth', $item['visibility'])){
                $visibility_flag = true;
            }
            
            if($visibility_flag){    
            echo '<li class="nav-item ', $subClass, $active,'">';
                if(!$hasSub){
                    echo '<a class="nav-link" href="/', $item['url'],'">', $item['title'],'</a>';
                } else {
                    echo '<a class="nav-link dropdown-toggle" href="', $item['url'],'" id="', $key,'" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">', $item['title'],'</a>';
                    echo '<div class="dropdown-menu" aria-labelledby="', $key,'">';
                    foreach ($item['sub'] as $subkey => $subitem){
                        echo '<a class="dropdown-item" href="/', $subitem['url'],'">', $subitem['title'],'</a>';
                    }
                    echo '</div>';
                }
            echo '</li>';    
            }
        }
    ?>
</ul>


