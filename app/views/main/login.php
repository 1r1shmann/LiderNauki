<?php
$str_title = 'Главная';
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <form action="#" method="POST" id="loginForm">
                <div class="form-group">
                    <label for="email">E-mail:</label>
                    <input required="true" type="email" name="email" class="form-control" id="email" placeholder="Введите E-mail ...">
                </div>
                <div class="form-group">
                    <label for="password">Пароль:</label>
                    <input required="true" type="password" name="password" class="form-control" id="password" placeholder="Введите пароль ...">
                </div>
                <div class="form-group form-check">
                    <input name="remember" type="checkbox" class="form-check-input" id="remember">
                    <label class="form-check-label" for="remember">Запомнить меня</label>
                </div>
                <div class="row error_block hide">
                    <div class="col-12 alert-danger error_text border border-danger">
                        
                    </div>
                </div>
                <div class="float-right">
                    <img src="<?= $this->createUrl('images/loaders/loader.gif') ?>" id="loginLoader" class="mx-3 hide" style="width: 32px">
                    <button type="submit" id="loginSubmit" class="btn btn-primary">Войти на сайт</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript" src="<?= $this->createUrl('js/jquery-3.4.1.min.js') ?>"></script>
<script type="text/javascript">
    $(document).on('submit', '#loginForm', function(event){
        event.preventDefault();
        
        $('.error_text').html('');
        $('.error_block').slideUp('fast');
        $('#loginSubmit').attr('disabled', true);
        $('#loginLoader').show();
        
        
        $.ajax({
            type: 'POST',
            dataType: 'JSON',
            data: $('#loginForm').serialize(),
            url: '<?= $this->createUrl('main/ajaxLogin') ?>',
            success: function(data){
                if(data['status'] !== 'success'){
                    $('.error_text').html(data['msg']);
                    $('.error_block').slideDown('fast', function() {$('.error_block').fadeTo(600, 0.2, function() {$('.error_block').fadeTo(600, 1);});});
                    $('#loginSubmit').attr('disabled', false);
                    $('#loginLoader').hide();
            
                } else {
                    window.location.href = '<?= $this->createUrl('user') ?>';
                }
                return false;
            }
        });
    });
</script>