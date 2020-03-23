<?php
$str_title = 'Личный кабинет';
?>
<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <div id="userDataView">
                <?php $this->renderPartial('user/_user_data') ?>
            </div>
            <div id="userDataEdit" class="hide">
                <?php $this->renderPartial('user/_user_data_edit') ?>
            </div>
            <?php $this->renderPartial('user/_user_educational_institutions') ?>
        </div>
        <div class="col-lg-6">
            <?php $this->renderPartial('user/_user_members') ?>
            <?php $this->renderPartial('user/_user_mentors') ?>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>