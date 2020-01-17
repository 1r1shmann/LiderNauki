<div id="_user_members">
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#user_members_content" aria-expanded="true" aria-controls="user_members_content">
                    &#8645; Персональные данные
                </button>
            </h5>
        </div>

        <div id="user_members_content" class="collapse show" aria-labelledby="user_members_content" data-parent="#_user_members">
            <div class="card-body">
                <div class="row data-row">
                    <div class="col-11">
                        <?= $_SESSION['user']['last_name'], $_SESSION['user']['first_name'], $_SESSION['user']['middle_name'] ?>
                    </div>
                    <div class="col-1">
                        b
                    </div>
                </div>
                <div class="row data-row">
                    <div class="col-11">
                        <?= $_SESSION['user']['last_name'], $_SESSION['user']['first_name'], $_SESSION['user']['middle_name'] ?>
                    </div>
                    <div class="col-1">
                        b
                    </div>
                </div>
                <div class="row data-row">
                    <div class="col-11">
                        <?= $_SESSION['user']['last_name'], $_SESSION['user']['first_name'], $_SESSION['user']['middle_name'] ?>
                    </div>
                    <div class="col-1">
                        b
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>