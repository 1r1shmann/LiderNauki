<?php
    $str_title = 'Регистрация';
?>
<div class="container">
    
    <form action="#" method="POST" id="regForm">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="form-group">
                    <label for="last_name">Фамилия:</label>
                    <input required="true" type="text" name="last_name" class="form-control" id="last_name" placeholder="Введите фамилию ...">
                </div>
                <div class="form-group">
                    <label for="first_name">Имя:</label>
                    <input required="true" type="text" name="first_name" class="form-control" id="first_name" placeholder="Введите имя ...">
                </div>
                <div class="form-group">
                    <label for="middle_name">Отчество:</label>
                    <input required="true" type="text" name="middle_name" class="form-control" id="middle_name" placeholder="Введите отчество ...">
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="form-group">
                    <label for="email">E-mail:</label>
                    <input required="true" type="email" name="email" class="form-control" id="email" placeholder="Введите e-mail ...">
                </div>
                <div class="form-group">
                    <label for="password">Пароль:</label>
                    <input required="true" type="password" name="password" class="form-control" id="password" placeholder="Введите пароль ...">
                </div>
                <div class="form-group">
                    <label for="confirm_password">Пароль еще раз:</label>
                    <input required="true" type="password" name="confirm_password" class="form-control" id="confirm_password" placeholder="Повторите пароль ...">
                </div>
            </div>
            <div class="col-8 error_block hide">
                <div class="row ">
                    <div class="col-12 alert-danger error_text border border-danger">
                        
                    </div>
                </div>
            </div>
            <div class="col-8">
                <div class="float-right">
                    <img src="<?= $this->createUrl('public/images/loaders/loader.gif') ?>" id="regLoader" class="mx-3 hide" style="width: 32px">
                    <button type="submit" id="regSubmit" class="btn btn-primary">Зарегистрироваться</button>
                </div>
            </div>
        </div>
    </form>
</div>
<script type="text/javascript" src="<?= $this->createUrl('public/js/jquery-3.4.1.min.js') ?>"></script>
<script type="text/javascript">
    $(document).on('submit', '#regForm', function(event){
        event.preventDefault();
        
        $('.error_text').html('');
        $('.error_block').slideUp('fast');
        $('#regSubmit').attr('disabled', true);
        $('#regLoader').show();
        
        console.log($('#regForm').serialize());
        
        $.ajax({
            type: 'POST',
            dataType: 'JSON',
            data: $('#regForm').serialize(),
            url: '<?= $this->createUrl('main/ajaxRegistrationValidate') ?>',
            success: function(data){
                if(data['status'] !== 'success'){
                    var err_txt = '';
                    for(i in data['msg']){
                        err_txt = err_txt + '<div>• ' + data['msg'][i] + '</div> ';
                    }
                    $('.error_text').html(err_txt);
                    $('.error_block').slideDown('fast', function() {$('.error_block').fadeTo(600, 0.2, function() {$('.error_block').fadeTo(600, 1);});});
                    $('#regSubmit').attr('disabled', false);
                    $('#regLoader').hide();
            
                } else {
                    $.ajax({
                        type: 'POST',
                        dataType: 'JSON',
                        data: $('#regForm').serialize(),
                        url: '<?= $this->createUrl('main/ajaxRegistration') ?>',
                        success: function(data){
                            if(data['status'] !== 'success'){
                                $('.error_text').html(data['msg']);
                                $('.error_block').slideDown('fast', function() {$('.error_block').fadeTo(600, 0.2, function() {$('.error_block').fadeTo(600, 1);});});
                                $('#regSubmit').attr('disabled', false);
                                $('#regLoader').hide();

                            } else {
                                window.location.href = '<?= $this->createUrl('user') ?>';
                            }
                            return false;
                        }
                    });
                }
            }
        });
    });
</script>

