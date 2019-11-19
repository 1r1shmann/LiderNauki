C:\OSPanel\modules\php\PHP-7.2\php.exe -r "copy('http://getcomposer.org/installer', 'composer-setup.php');"
C:\OSPanel\modules\php\PHP-7.2\php.exe -r "if (hash_file('sha384', 'composer-setup.php') === 'a5c698ffe4b8e849a443b120cd5ba38043260d5c4023dbf93e1558871f1f07f58274fc6f4c93bcfd858c6bd0775cd8d1') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
C:\OSPanel\modules\php\PHP-7.2\php.exe composer-setup.php
C:\OSPanel\modules\php\PHP-7.2\php.exe -r "unlink('composer-setup.php');"
pause