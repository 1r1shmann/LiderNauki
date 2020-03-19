<?php
$str_title = 'Личный кабинет';
?>
<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <div id="userDataView" class="hide">
                <?php $this->renderPartial('user/_user_data') ?>
            </div>
            <div id="userDataEdit" >
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
<script type="text/javascript" src="<?= $this->createUrl('public/js/jquery-3.4.1.min.js') ?>"></script>
<script type="text/javascript">
    $(document).on('click', '#editUserData', function () {
        $('#userDataView').hide('fast');
        $('#userDataEdit').show('fast');
        return false;

    });
    $(document).on('click', '#cancelEditUserData', function () {
        $('#userDataEdit').hide('fast');
        $('#userDataView').show('fast');
        return false;
    });
</script>
