<ul class="navbar-nav mr-auto ">
    <?php
        $url = preg_replace('/^\//', '', preg_replace('/\/$/', '', $_SERVER['REQUEST_URI']));
        foreach (app\core\Config::MENU as $key => $item) {
            $active = ($url === $item['url']) ? ' active' : '';
            $hasSub = isset($item['sub']) && is_array($item['sub']);
            $subClass = $hasSub ? 'dropdown' : '';
            
            
            $visibility_flag = false;
            if (empty($item['visibility'])){
                $visibility_flag = true;
            } else if (isset($_SESSION['auth'])){
                $user = \app\models\User::find('first', [
                    'conditions' => ['id=?', $_SESSION['user']['id']]
                ]);
                foreach ($item['visibility'] as $vsbl_rule){
                    if ($user->checkAccessRule($vsbl_rule)){
                        $visibility_flag = true;
                        break;
                    }
                }
            }
            
            if($visibility_flag){    
            echo '<li class="nav-item ', $subClass, $active,'">';
                if(!$hasSub){
                    echo '<a class="nav-link" href="/', (app\core\Config::ROOT_DIR ? app\core\Config::ROOT_DIR.'/' : ''), $item['url'],'">', $item['title'],'</a>';
                } else {
                    echo '<a class="nav-link dropdown-toggle" href="', (app\core\Config::ROOT_DIR ? app\core\Config::ROOT_DIR.'/' : ''), $item['url'],'" id="', $key,'" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">', $item['title'],'</a>';
                    echo '<div class="dropdown-menu" aria-labelledby="', $key,'">';
                    foreach ($item['sub'] as $subkey => $subitem){
                        $subactive = ($url === $subitem['url']) ? ' active' : '';
                        $visibility_flag = false;
                        
                        if (empty($subitem['visibility'])){
                            $visibility_flag = true;
                        } else if (isset($_SESSION['auth'])){
                            $user = \app\models\User::find('first', [
                                'conditions' => ['id=?', $_SESSION['user']['id']]
                            ]);
                            foreach ($subitem['visibility'] as $vsbl_rule){
                                if ($user->checkAccessRule($vsbl_rule)){
                                    $visibility_flag = true;
                                    break;
                                }
                            }
                        }
                        if($visibility_flag){
                            echo '<a class="dropdown-item ', $subactive,'" href="/', (app\core\Config::ROOT_DIR ? app\core\Config::ROOT_DIR.'/' : ''), $subitem['url'],'">', $subitem['title'],'</a>';
                        }
                    }
                    echo '</div>';
                }
            echo '</li>';    
            }
        }
    ?>
</ul>


