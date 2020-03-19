<div id="_user_mentors" class="pb-3">
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#user_mentors_content" aria-expanded="true" aria-controls="user_mentors_content" title="Скрыть/раскрыть секцию">
                    &#8645; Руководители
                </button>
            </h5>
        </div>
        <div id="user_mentors_content" class="collapse show" aria-labelledby="user_mentors_content" data-parent="#_user_mentors">
            <div class="card-body">
                <div class="row data-row">
                    <div class="col-2">
                        <div class="button_ico" data-memberid="100" data-toggle="tooltip" data-placement="top" title="Редактировать участника">&#9999;</div>
                    </div>
                    <div class="col-8 memberName">
                        <?= $_SESSION['user']['last_name'], ' ', $_SESSION['user']['first_name'], ' ', $_SESSION['user']['middle_name'] ?> (#100)
                    </div>
                    <div class="col-2">
                        <div class="button_ico float-right deleteMemberButton" data-memberid="100" data-toggle="tooltip" data-placement="top" title="Удалить участника">&#9932;</div>
                    </div>
                </div>
                <div class="row data-row">
                    <div class="col-2">
                        <div class="button_ico" data-memberid="101" data-toggle="tooltip" data-placement="top" title="Редактировать участника">&#9999;</div>
                    </div>
                    <div class="col-8 memberName">
                        <?= $_SESSION['user']['last_name'], ' ', $_SESSION['user']['first_name'], ' ', $_SESSION['user']['middle_name'] ?> (#101)
                    </div>
                    <div class="col-2">
                        <div class="button_ico float-right deleteMemberButton" data-memberid="101" data-toggle="tooltip" data-placement="top" title="Удалить участника">&#9932;</div>
                    </div>
                </div>
                <div class="row data-row">
                    <div class="col-2">
                        <div class="button_ico" data-memberid="102" data-toggle="tooltip" data-placement="top" title="Редактировать участника">&#9999;</div>
                    </div>
                    <div class="col-8 memberName">
                        <?= $_SESSION['user']['last_name'], ' ', $_SESSION['user']['first_name'], ' ', $_SESSION['user']['middle_name'] ?> (#102)
                    </div>
                    <div class="col-2">
                        <div class="button_ico float-right deleteMemberButton" data-memberid="102" data-toggle="tooltip" data-placement="top" title="Удалить участника">&#9932;</div>
                    </div>
                </div>
                <div class="row data-row">
                    <div class="col-12 text-center">
                        <button class="btn btn-secondary">
                            Добавить руководителя
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>