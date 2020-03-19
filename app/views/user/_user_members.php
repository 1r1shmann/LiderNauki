<div id="_user_members" class="pb-3">
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#user_members_content" aria-expanded="true" aria-controls="user_members_content" title="Скрыть/раскрыть секцию">
                    &#8645; Участники
                </button>
            </h5>
        </div>
        <div id="user_members_content" class="collapse show" aria-labelledby="user_members_content" data-parent="#_user_members">
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
                        <button class="btn btn-secondary" data-toggle="modal" data-target="#addUserMember">
                            Добавить участника
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="addUserMember" tabindex="-1" role="dialog" aria-labelledby="addUserMemberTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addUserMemberTitle">Добавить участника</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-4">
                        
                    </div>
                    <div class="col-8">
                        
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
                <button type="button" class="btn btn-primary">Добавить</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="deleteMember" tabindex="-1" role="dialog" aria-labelledby="deleteMemberTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteMemberTitle">Удаление участника</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Вы уверены, что хотите удалить участника <strong><span class="memberName"></span></strong> под номером <strong>#<span class="memberId"></span></strong>?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
                <button type="button" class="btn btn-danger confirmDeleteMember">Удалить</button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="<?= $this->createUrl('public/js/jquery-3.4.1.min.js') ?>"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });
    $(document).on('click', '.deleteMemberButton', function(){
        let memberId = $(this).data('memberid');
        let memberName = $(this).closest('.row').find('.memberName').text().trim();
        
        $('#deleteMember').find('.memberName').html(memberName);
        $('#deleteMember').find('.memberId').html(memberId);
        $('#deleteMember').modal('show');
    });
</script>