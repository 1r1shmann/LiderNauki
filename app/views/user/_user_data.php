<div id="_user_data">
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#user_data_content" aria-expanded="true" aria-controls="user_data_content">
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
            </div>
        </div>
    </div>
</div>