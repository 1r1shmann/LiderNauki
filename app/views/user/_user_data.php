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
                    <div class="col-8">
                        <?= $_SESSION['user']['last_name'] ?>
                    </div>
                </div>
                <div class="row data-row">
                    <div class="col-4">
                        Имя:
                    </div>
                    <div class="col-8">
                        <?= $_SESSION['user']['first_name'] ?>
                    </div>
                </div>
                <div class="row data-row">
                    <div class="col-4">
                        Отчество:
                    </div>
                    <div class="col-8">
                        <?= $_SESSION['user']['middle_name'] ?>
                    </div>
                </div>
                <div class="row data-row">
                    <div class="col-4">
                        Телефон:
                    </div>
                    <div class="col-8">
                        <?= $_SESSION['user']['telephone'] ? $_SESSION['user']['telephone'] : 'Не указан' ?>
                    </div>
                </div>
                <div class="row data-row">
                    <div class="col-4">
                        Адрес:
                    </div>
                    <div class="col-8">
                        <?php
                            if ($_SESSION['user']['post_code'] && $_SESSION['user']['country'] && $_SESSION['user']['region'] && $_SESSION['user']['district'] && $_SESSION['user']['city'] && $_SESSION['user']['address']){
                                echo $_SESSION['user']['post_code'], ', ', $_SESSION['user']['country'], ', ', $_SESSION['user']['region'], ', ', $_SESSION['user']['district'], ', ', $_SESSION['user']['city'], ', ', $_SESSION['user']['address'];
                            } else {
                                echo 'Не указан';
                            }
                        ?>
                    </div>
                </div>
                <div class="row data-row">
                    <div class="col-12 text-center">
                        <button class="btn btn-secondary" id="editUserData">
                            Редактировать
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>