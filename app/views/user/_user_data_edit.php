<div id="_user_data" class="pb-3">
    <div class="card bg-light">
        <div class="card-header">
            <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#user_data_content" aria-expanded="true" aria-controls="user_data_content" title="Скрыть/раскрыть секцию">
                    &#8645; Редактировать персональные данные
                </button>
            </h5>
        </div>
        <div id="user_data_content" class="collapse show" aria-labelledby="user_data_content" data-parent="#_user_data">
            <div class="card-body">
                <form action="" id="editUserDataForm">
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon_last_name">Фамилия:</span>
                        </div>
                        <input id="last_name" name="last_name" required="true" type="text" class="form-control" placeholder="Введите фамилию..." aria-describedby="addon_last_name" value="<?= $_SESSION['user']['last_name'] ?>">
                    </div>
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon_first_name">Имя:</span>
                        </div>
                        <input id="first_name" name="first_name" required="true" type="text" class="form-control" placeholder="Введите имя..." aria-describedby="addon_first_name" value="<?= $_SESSION['user']['first_name'] ?>">
                    </div>
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon_middle_name">Отчество:</span>
                        </div>
                        <input id="middle_name" name="middle_name" required="true" type="text" class="form-control" placeholder="Введите отчество..." aria-describedby="addon_middle_name" value="<?= $_SESSION['user']['middle_name'] ?>">
                    </div>
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon_telephone">Телефон:</span>
                        </div>
                        <input id="telephone" name="telephone" required="true" type="text"  class="form-control" placeholder="Введите номер..." aria-describedby="addon_telephone" value="<?= $_SESSION['user']['telephone'] ?>">
                    </div>
                    <div class="text-center">
                        <h5>Почтовый адрес</h5>
                    </div>
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon_country">Страна:</span>
                        </div>
                        <input id="country" name="country" required="true" type="text" class="form-control" aria-describedby="addon_country" value="<?= $_SESSION['user']['country'] ?>">
                    </div>
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon_region">Область / край:</span>
                        </div>
                        <input id="region" name="region" required="true" type="text" class="form-control" aria-describedby="addon_region" value="<?= $_SESSION['user']['region'] ?>">
                    </div>
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon_district">Район:</span>
                        </div>
                        <input id="district" name="district" required="true" type="text" class="form-control" aria-describedby="addon_district" value="<?= $_SESSION['user']['district'] ?>">
                    </div>
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon_city">Населённый пункт:</span>
                        </div>
                        <input id="city" name="city" required="true" type="text" class="form-control" aria-describedby="addon_city" value="<?= $_SESSION['user']['city'] ?>">
                    </div>
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon_post_code">Почтовый индекс:</span>
                        </div>
                        <input id="post_code" name="post_code" required="true" type="text" class="form-control" aria-describedby="addon_post_code" value="<?= $_SESSION['user']['post_code'] ?>">
                    </div>
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon_address">Улица, дом, квартира:</span>
                        </div>
                        <input id="address" name="address" required="true" type="text" class="form-control" aria-describedby="addon_address" value="<?= $_SESSION['user']['address'] ?>">
                    </div>
                    <div class="row data-row error_block ">
                        <div class="col-12 alert-danger error_text border border-danger"></div>
                    </div>
                    <div class="row data-row">
                        <div class="col-12 text-center">
                            <button type="button" class="btn btn-secondary" id="cancelEditUserData">
                                Отменить
                            </button>
                            <button type="submit" class="btn btn-primary" id="saveUserData">
                                Сохранить
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="<?= $this->createUrl('public/js/jquery-3.4.1.min.js') ?>"></script>
<script type="text/javascript" src="<?= $this->createUrl('public/js/inputmask.min.js') ?>"></script>
<script type="text/javascript">
    $(document).ready(function(){
        Inputmask({"mask": "+7(999)999-99-99"}).mask($("#telephone"));
    })
</script>