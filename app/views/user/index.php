<?php
$str_title = 'Личный кабинет';
?>
<div class="container">
    <di class="row">
        <div class="col-lg-6">
            <?php $this->renderPartial('user/_user_data') ?>
        </div>
        <div class="col-lg-6">
            <?php $this->renderPartial('user/_user_members') ?>
        </div>
    </di>
</div>