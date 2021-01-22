<div id="_user_data" class="pb-3">
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#user_data_content" aria-expanded="true" aria-controls="user_data_content" title="Скрыть/раскрыть секцию">
                    &#8645; Персональные данные
                </button>
            </h5>
        </div>
        <div id="user_data_content" class="collapse show" aria-labelledby="user_data_content" data-parent="#_user_data">
            <div class="card-body">
                <div class="row data-row">
                    <div class="col-4">
                        Фамилия:
                    </div>
                    <div class="col-8" id="udl_last_name">
                        <?= $_SESSION['user']['last_name'] ?>
                    </div>
                </div>
                <div class="row data-row">
                    <div class="col-4">
                        Имя:
                    </div>
                    <div class="col-8" id="udl_first_name">
                        <?= $_SESSION['user']['first_name'] ?>
                    </div>
                </div>
                <div class="row data-row">
                    <div class="col-4">
                        Отчество:
                    </div>
                    <div class="col-8" id="udl_middle_name">
                        <?= $_SESSION['user']['middle_name'] ?>
                    </div>
                </div>
                <div class="row data-row">
                    <div class="col-4">
                        Телефон:
                    </div>
                    <div class="col-8" id="udl_telephone">
                        <?= $_SESSION['user']['telephone'] ? $_SESSION['user']['telephone'] : 'Не указан' ?>
                    </div>
                </div>
                <div class="row data-row">
                    <div class="col-4">
                        Адрес:
                    </div>
                    <div class="col-8"  id="udl_address">
                        <?php
                        if ($_SESSION['user']['post_code'] && $_SESSION['user']['country'] && $_SESSION['user']['region'] && $_SESSION['user']['district'] && $_SESSION['user']['city'] && $_SESSION['user']['address']) {
                            echo $_SESSION['user']['post_code'], ', ', $_SESSION['user']['country'], ', ', $_SESSION['user']['region'], ', ', $_SESSION['user']['district'], ', ', $_SESSION['user']['city'], ', ', $_SESSION['user']['address'];
                        } else {
                            echo 'Не указан';
                        }
                        ?>
                    </div>
                </div>
                <div class="row data-row">
                    <div class="col-12 text-center">
                        <button class="btn btn-secondary" data-toggle="modal" data-target="#editUserData">
                            Редактировать
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="editUserData" tabindex="-1" role="dialog" aria-labelledby="editUserDataTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <form action="" id="editUserDataForm">
                <div class="modal-header">
                    <h5 class="modal-title" id="editUserDataTitle">Редактировать персональные данные</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon_last_name">Фамилия:</span>
                        </div>
                        <input id="eudf_last_name" name="last_name" required="true" type="text" class="form-control" placeholder="Введите фамилию..." aria-describedby="addon_last_name" value="<?= $_SESSION['user']['last_name'] ?>">
                    </div>
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon_first_name">Имя:</span>
                        </div>
                        <input id="eudf_first_name" name="first_name" required="true" type="text" class="form-control" placeholder="Введите имя..." aria-describedby="addon_first_name" value="<?= $_SESSION['user']['first_name'] ?>">
                    </div>
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon_middle_name">Отчество:</span>
                        </div>
                        <input id="eudf_middle_name" name="middle_name" required="true" type="text" class="form-control" placeholder="Введите отчество..." aria-describedby="addon_middle_name" value="<?= $_SESSION['user']['middle_name'] ?>">
                    </div>
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon_telephone">Телефон:</span>
                        </div>
                        <input id="eudf_telephone" name="telephone" required="true" type="text"  class="form-control" placeholder="Введите номер..." aria-describedby="addon_telephone" value="<?= $_SESSION['user']['telephone'] ?>">
                    </div>
                    <div class="text-center">
                        <h5>Почтовый адрес</h5>
                    </div>
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon_country">Страна:</span>
                        </div>
                        <input id="eudf_country" name="country" required="true" type="text" class="form-control" aria-describedby="addon_country" value="<?= $_SESSION['user']['country'] ?>">
                    </div>
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon_region">Область / край:</span>
                        </div>
                        <input id="eudf_region" name="region" required="true" type="text" class="form-control" aria-describedby="addon_region" value="<?= $_SESSION['user']['region'] ?>">
                    </div>
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon_district">Район:</span>
                        </div>
                        <input id="eudf_district" name="district" type="text" class="form-control" aria-describedby="addon_district" value="<?= $_SESSION['user']['district'] ?>">
                    </div>
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon_city">Населённый пункт:</span>
                        </div>
                        <input id="eudf_city" name="city" required="true" type="text" class="form-control" aria-describedby="addon_city" value="<?= $_SESSION['user']['city'] ?>">
                    </div>
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon_post_code">Почтовый индекс:</span>
                        </div>
                        <input id="eudf_post_code" name="post_code" required="true" type="text" class="form-control" aria-describedby="addon_post_code" value="<?= $_SESSION['user']['post_code'] ?>">
                    </div>
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon_address">Улица, дом, квартира:</span>
                        </div>
                        <input id="eudf_address" name="address" required="true" type="text" class="form-control" aria-describedby="addon_address" value="<?= $_SESSION['user']['address'] ?>">
                    </div>
                    <div class="row data-row error_block hide">
                        <div class="col-12 alert-danger error_text border border-danger"></div>
                    </div>
                </div>
                <div class="modal-footer">
                    <img src="<?= $this->createUrl('public/images/loaders/loader.gif') ?>" id="saveUserDataLoader" class="mx-3 hide" style="width: 32px">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" id="canceEditUserData">Отмена</button>
                    <button type="submit" class="btn btn-primary" id="saveUserData">Сохранить</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript" src="<?= $this->createUrl('public/js/inputmask.min.js') ?>"></script>
<script type="text/javascript">
    $(document).ready(function () {
//        Inputmask({"mask": "+9(999)999-99-99"}).mask($("#telephone")); 
        Inputmask({"regex": "^(\\s*)?(\\+)?([- _():=+]?\\d[- _():=+]?){10,14}(\\s*)?$"}).mask($("#telephone"));
    })
    $('body').tooltip({
        selector: '[data-toggle="tooltip"]'
    });

    $(document).on('submit', '#editUserDataForm', function (event) {
        event.preventDefault();

        $('.error_text').html('');
        $('.error_block').slideUp('fast');
        $('#saveUserData').attr('disabled', true);
        $('#canceEditUserData').attr('disabled', true);
        $('#saveUserDataLoader').show();

        let form_data = $('#editUserDataForm').serialize();
        $.ajax({
            type: 'POST',
            dataType: 'JSON',
            data: form_data,
            url: '<?= $this->createUrl('user/EditUserDataValidate') ?>',
            success: function (data) {
                if (data['status'] !== 'success') {
                    var err_txt = '';
                    for (i in data['msg']) {
                        err_txt = err_txt + '<div>• ' + data['msg'][i] + '</div> ';
                    }
                    $('.error_text').html(err_txt);
                    $('.error_block').slideDown('fast', function () {
                        $('.error_block').fadeTo(600, 0.2, function () {
                            $('.error_block').fadeTo(600, 1);
                        });
                    });
                    $('#saveUserData').attr('disabled', false);
                    $('#canceEditUserData').attr('disabled', false);
                    $('#saveUserDataLoader').hide();

                } else {
                    $.ajax({
                        type: 'POST',
                        dataType: 'JSON',
                        data: form_data,
                        url: '<?= $this->createUrl('user/EditUserData') ?>',
                        success: function (data) {
                            if (data['status'] !== 'success') {
                                $('.error_text').html(data['msg']);
                                $('.error_block').slideDown('fast', function () {
                                    $('.error_block').fadeTo(600, 0.2, function () {
                                        $('.error_block').fadeTo(600, 1);
                                    });
                                });
                                $('#saveUserData').attr('disabled', false);
                                $('#canceEditUserData').attr('disabled', false);
                                $('#saveUserDataLoader').hide();

                            } else {
                                $('#udl_last_name').html($('input#eudf_last_name').val());
                                $('#udl_first_name').html($('input#eudf_first_name').val());
                                $('#udl_middle_name').html($('input#eudf_middle_name').val());
                                $('#udl_telephone').html($('input#eudf_telephone').val());

                                let address_row = $('input#eudf_post_code').val() + ', ';
                                address_row += $('input#eudf_country').val() + ', ';
                                address_row += $('input#eudf_region').val() + ', ';
                                address_row += $('input#eudf_district').val() + ', ';
                                address_row += $('input#eudf_city').val() + ', ';
                                address_row += $('input#eudf_address').val();
                                $('#udl_address').html(address_row);

                                $('#editUserData').modal('hide');
                                $('#saveUserData').attr('disabled', false);
                                $('#canceEditUserData').attr('disabled', false);
                                $('#saveUserDataLoader').hide();
                                $.toast({
                                    title: 'Данные изменены!',
                                    content: 'Изменение персональных данных прошло успешно.',
                                    type: 'success',
                                    delay: 6000,
                                    img: {
                                        symbol: '&#9888;'
                                    }
                                });
                            }
                            return false;
                        }
                    });
                }
            }
        });
    });

</script>