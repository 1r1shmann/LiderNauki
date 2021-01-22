<div id="_user_mentors" class="pb-3">
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#user_mentor_content" aria-expanded="true" aria-controls="user_mentors_content" title="Скрыть/раскрыть секцию">
                    &#8645; Руководители
                </button>
            </h5>
        </div>
        <div id="user_mentors_content" class="collapse show" aria-labelledby="user_mentors_content" data-parent="#_user_mentors">
            <div class="card-body">
                <div class="row data-row">
                    <div id="MentorsListTable"></div>
                </div>
                <div class="row data-row">
                    <div class="col-12 text-center">
                        <button class="btn btn-secondary" data-toggle="modal" data-target="#addMentor">
                            Добавить руководителя
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="addMentor" tabindex="-1" role="dialog" aria-labelledby="addMentorTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <form action="" id="addMentorForm">
                <div class="modal-header">
                    <h5 class="modal-title" id="addMentorTitle">Добавить руководителя</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon_last_name">Фамилия:</span>
                        </div>
                        <input id="eudf_last_name" name="last_name" required="true" type="text" class="form-control" placeholder="Введите фамилию..." aria-describedby="addon_last_name" value="">
                    </div>
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon_first_name">Имя:</span>
                        </div>
                        <input id="eudf_first_name" name="first_name" required="true" type="text" class="form-control" placeholder="Введите имя..." aria-describedby="addon_first_name" value="">
                    </div>
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon_middle_name">Отчество:</span>
                        </div>
                        <input id="eudf_middle_name" name="middle_name" required="true" type="text" class="form-control" placeholder="Введите отчество..." aria-describedby="addon_middle_name" value="">
                    </div>
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon_position">Должность:</span>
                        </div>
                        <input id="eudf_position" name="position" required="true" type="text" class="form-control" aria-describedby="addon_position" value="">
                    </div>
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon_school_id">Образовательное учреждение:</span>
                        </div>
                        <input id="eudf_school_id" name="school_id" required="true" type="text" class="form-control" aria-describedby="addon_school_id" value="">
                    </div>
                    <div class="row data-row add_mentor_error_block hide">
                        <div class="col-12 alert-danger add_mentor_error_text border border-danger"></div>
                    </div>
                </div>
                <div class="modal-footer">
                    <img src="<?= $this->createUrl('public/images/loaders/loader.gif') ?>" id="saveAddMentorLoader" class="mx-3 hide" style="width: 32px">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" id="canceAddMentor">Отмена</button>
                    <button type="submit" class="btn btn-primary" id="saveMentor">Сохранить</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="deleteMentor" tabindex="-1" role="dialog" aria-labelledby="deleteMentorTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteMentorTitle">Удаление руководителя</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Вы уверены, что хотите удалить руководителя <strong><span class="mentorName"></span></strong> под номером <strong>#<span class="mentorId"></span></strong>?</p>
                <div class="row data-row delete_mentor_error_block hide">
                    <div class="col-12 alert-danger delete_mentor_error_text border border-danger"></div>
                </div>
            </div>
            <div class="modal-footer">
                <img src="<?= $this->createUrl('public/images/loaders/loader.gif') ?>" id="MentorDeleteLoader" class="mx-3 hide" style="width: 32px">
                <button type="button" class="btn btn-secondary" id="cancelMentorDelete" data-dismiss="modal">Отмена</button>
                <button type="button" class="btn btn-danger" id="confirmMentorDelete">Удалить</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="editMentor" tabindex="-1" role="dialog" aria-labelledby="deleteMentorTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div id="editMentorWaitBlock">
                <div class="modal-header">
                    <h5 class="modal-title" id="addMentorTitle">Изменить данные</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body center-align">
                    <div class="row waitText">
                        <div class="col-12">Пожалуйста подождите... <img src="<?= $this->createUrl('public/images/loaders/loader.gif') ?>" class="mx-3" style="width: 32px"></div>
                    </div>
                    <div class="row editMentorWaitErrorBlock ">
                        <div class="col-12 alert-danger editMentorWaitErrorBlockText border border-danger">as</div>
                    </div>
                </div>
            </div>
            <form action="" id="editMentorForm" class="hide">
                <input type="hidden" name="mentor_id" value="">
                <div class="modal-header">
                    <h5 class="modal-title" id="addMentorTitle">Изменить данные</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon_last_name">Фамилия:</span>
                        </div>
                        <input id="eudf_last_name" name="last_name" required="true" type="text" class="form-control" placeholder="Введите фамилию..." aria-describedby="addon_last_name" value="">
                    </div>
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon_first_name">Имя:</span>
                        </div>
                        <input id="eudf_first_name" name="first_name" required="true" type="text" class="form-control" placeholder="Введите имя..." aria-describedby="addon_first_name" value="">
                    </div>
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon_middle_name">Отчество:</span>
                        </div>
                        <input id="eudf_middle_name" name="middle_name" required="true" type="text" class="form-control" placeholder="Введите отчество..." aria-describedby="addon_middle_name" value="">
                    </div>
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon_position">Должность:</span>
                        </div>
                        <input id="eudf_position" name="position" required="true" type="text" class="form-control" aria-describedby="addon_position" value="">
                    </div>
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon_school_id">Образовательное учреждение:</span>
                        </div>
                        <input id="eudf_school_id" name="school_id" required="true" type="text" class="form-control" aria-describedby="addon_school_id" value="">
                    </div>
                    <div class="row data-row edit_mentor_error_block hide">
                        <div class="col-12 alert-danger edit_mentor_error_text border border-danger"></div>
                    </div>
                </div>
                <div class="modal-footer">
                    <img src="<?= $this->createUrl('public/images/loaders/loader.gif') ?>" id="saveEditMentorLoader" class="mx-3 hide" style="width: 32px">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" id="cancelEditMentor">Отмена</button>
                    <button type="submit" class="btn btn-primary" id="saveEditMentor">Сохранить</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script type="text/javascript">
    var MentorsListTable;
    var MentorsListTableRow;
    var deleteMentorId;
    var deletementorName;
    var editmentorId;
    var editmentorName;
    function InitMentorTabulator(){
        MentorsListTable = new Tabulator("#MentorsListTable", {
            placeholder: "Нет данных",
            columns:[
                {field:"edit", formatter:"html", headerSort:false, width: "10%"},
                {title:"Наименование", field:"name", sorter:"string", hozAlign:"left", width: "80%"},
                {field:"delete", formatter:"html", headerSort:false,  width: "10%"},
            ],
            pagination: "local", 
            ajaxURL: "<?= $this->createUrl('user/ViewMentorListAjax') ?>",
            paginationSize: 5,
            resizableColumns: false,
            paginationButtonCount: 3,
            locale:true,
            langs:{
                "ru-ru":{
                    "pagination":{
                        "page_size":"Показать по", //label for the page size select element
                        "page_title":"Перейти на страницу",//tooltip text for the numeric page button, appears in front of the page number (eg. "Show Page" will result in a tool tip of "Show Page 1" on the page 1 button)
                        "first":"<<", //text for the first page button
                        "first_title":"На первую страницу", //tooltip text for the first page button
                        "last":">>",
                        "last_title":"На последнюю",
                        "prev":"<",
                        "prev_title":"Предыдущая страница",
                        "next":">",
                        "next_title":"Следующая страница",
                        "all":"Все",
                    }
                }
            },
        });
    }
    
    $(document).ready( function () {
        InitMentorTabulator();
    } );

    $(document).on('submit', '#addMentorForm', function (event) {
        event.preventDefault();

        $('.add_mentor_error_text').html('');
        $('.add_mentor_error_block').slideUp('fast');
        $('#savementor').attr('disabled', true);
        $('#canceAddMentor').attr('disabled', true);
        $('#saveAddMentorLoader').show();

        let form_data = $('#addMentorForm').serialize();
        $.ajax({
            type: 'POST',
            dataType: 'JSON',
            data: form_data,
            url: '<?= $this->createUrl('user/AddMentorValidate') ?>',
            success: function (data) {
                if (data['status'] !== 'success') {
                    var err_txt = '';
                    for (i in data['msg']) {
                        err_txt = err_txt + '<div>• ' + data['msg'][i] + '</div> ';
                    }
                    $('.add_mentor_error_text').html(err_txt);
                    $('.add_mentor_error_block').slideDown('fast', function () {
                        $('.add_mentor_error_block').fadeTo(600, 0.2, function () {
                            $('.add_mentor_error_block').fadeTo(600, 1);
                        });
                    });
                    $('#saveMentor').attr('disabled', false);
                    $('#canceAddMentor').attr('disabled', false);
                    $('#saveAddMentorLoader').hide();

                } else {
                    $.ajax({
                        type: 'POST',
                        dataType: 'JSON',
                        data: form_data,
                        url: '<?= $this->createUrl('user/AddMentor') ?>',
                        success: function (data) {
                            if (data['status'] !== 'success') {
                                $('.add_mentor_error_text').html(data['msg']);
                                $('.add_mentor_error_block').slideDown('fast', function () {
                                    $('.add_mentor_error_block').fadeTo(600, 0.2, function () {
                                        $('.add_mentor_error_block').fadeTo(600, 1);
                                    });
                                });
                                $('#saveMentor').attr('disabled', false);
                                $('#canceAddMentor').attr('disabled', false);
                                $('#saveAddMentorLoader').hide();

                            } else {
                                MentorsListTable.destroy();
                                InitMentorTabulator();
                                
                                $('#addMentor').modal('hide');
                                $('#saveMentor').attr('disabled', false);
                                $('#saveAddMentorLoader').attr('disabled', false);
                                $('#saveAddMentorLoader').hide();
                                
                                $('#addMentorForm').trigger("reset");
                                $.toast({
                                    title: 'Готово!',
                                    content: 'Новый руководитель добавлен!',
                                    type: 'success',
                                    delay: 5000,
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
    
    $(document).on('click', '.deletementorsButton', function(){
        deletementorId = $(this).data('mentorsid');
        deletementorName = $(this).closest('.tabulator-row').find('[tabulator-field=name]').text().trim();
        
        $('#deleteMentor').find('.mentorName').html(deletementorName);
        $('#deleteMentor').find('.mentorId').html(deletementorId);
        $('#deleteMentor').modal('show');
    });
    
    $(document).on('click', '#confirmMentorDelete', function(){
        
        $('.delete_mentor_error_text').html('');
        $('.delete_mentor_error_block').slideUp('fast');
        $('#confirmMentorDelete').attr('disabled', true);
        $('#cancelMentorDelete').attr('disabled', true);
        $('#MentorDeleteLoader').show();
        $('#deleteMentor').find('.close').hide();
        
        $.ajax({
            type: 'POST',
            dataType: 'JSON',
            data: { 
                deletementorId: deletementorId
            },
            url: '<?= $this->createUrl('user/DeleteMentor') ?>',
            success: function (data) {
                if (data['status'] !== 'success') {
                    $('.delete_mentor_error_text').html(data['msg']);
                    $('.delete_mentor_error_block').slideDown('fast', function () {
                        $('.delete_mentor_error_block').fadeTo(600, 0.2, function () {
                            $('.delete_mentor_error_block').fadeTo(600, 1);
                        });
                    });
                    $('#confirmMentorDelete').attr('disabled', false);
                    $('#cancelMentorDelete').attr('disabled', false);
                    $('#MentorDeleteLoader').hide();
                    $('#deleteMentor').find('.close').show();

                } else {
                    MentorsListTable.destroy();
                    InitMentorTabulator();

                    $('#deleteMentor').modal('hide');
                    $('#confirmMentorDelete').attr('disabled', false);
                    $('#cancelMentorDelete').attr('disabled', false);
                    $('#MentorDeleteLoader').hide();
                    $('#deleteMentor').find('.close').show();

                    $.toast({
                        title: 'Готово!',
                        content: 'Руководитель удалён!',
                        type: 'success',
                        delay: 5000,
                        img: {
                            symbol: '&#9888;'
                        }
                    });
                }
                return false;
            }
        });
    });
    
    $(document).on('click', '.editMentorButton', function(){
        editmentorId = $(this).data('mentorsid');
        $('#editMentor').find('.mentorName').html(editmentorName);
        $('#editMentor').find('.mentorId').html(editmentorId);
        $('#editMentor').modal('show');
        
        $('#editMentorWaitErrorBlockText').html('');
        $('.editMentorWaitErrorBlock').slideUp('fast');
        $('#editMentor').find('.close').hide();
        $('#editMentorWaitBlock').show();
        $('#editMentorForm').hide();
        $('.waitText').show();
        
        
        $.ajax({
            type: 'POST',
            dataType: 'JSON',
            data: { 
                editmentorId: editmentorId
            },
            url: '<?= $this->createUrl('user/GetMentorAjax') ?>',
            success: function (data) {
                if (data['status'] !== 'success') {
                    $('.editMentorWaitErrorBlockText').html(data['msg']);
                    $('.editMentorWaitErrorBlock').slideDown('fast', function () {
                        $('.editMentorWaitErrorBlock').fadeTo(600, 0.2, function () {
                            $('.editMentorWaitErrorBlock').fadeTo(600, 1);
                        });
                    });
                    $('#editMentor').find('.close').show();
                    $('.waitText').hide();

                } else {
                    $('#editMentorForm').find('[name=mentor_id]').val(editmentorId);
                    $('#editMentorForm').find('[name=last_name]').val(data['mentor']['last_name']);
                    $('#editMentorForm').find('[name=first_name]').val(data['mentor']['first_name']);
                    $('#editMentorForm').find('[name=middle_name]').val(data['mentor']['middle_name']);
                    $('#editMentorForm').find('[name=position]').val(data['mentor']['position']);
                    $('#editMentorForm').find('[name=school_id]').val(data['mentor']['school_id']);
                    
                    
                    $('#editMentorWaitBlock').hide();
                    $('#editMentor').find('.close').show();
                    $('#editMentorForm').show();
                }
                return false;
            }
        });
        
    });
    
    $(document).on('submit', '#editMentorForm', function (event) {
        event.preventDefault();

        $('.edit_mentor_error_text').html('');
        $('.edit_mentor_error_block').slideUp('fast');
        $('#saveEditMentor').attr('disabled', true);
        $('#cancelEditMentor').attr('disabled', true);
        $('#saveEditMentorLoader').show();
        $('#editMentor').find('.close').hide();

        let form_data = $('#editMentorForm').serialize();
        $.ajax({
            type: 'POST',
            dataType: 'JSON',
            data: form_data,
            url: '<?= $this->createUrl('user/AddMentorValidate') ?>',
            success: function (data) {
                if (data['status'] !== 'success') {
                    var err_txt = '';
                    for (i in data['msg']) {
                        err_txt = err_txt + '<div>• ' + data['msg'][i] + '</div> ';
                    }
                    $('.edit_mentor_error_text').html(err_txt);
                    $('.edit_mentor_error_block').slideDown('fast', function () {
                        $('.edit_mentor_error_block').fadeTo(600, 0.2, function () {
                            $('.edit_mentor_error_block').fadeTo(600, 1);
                        });
                    });
                    $('#saveEditMentor').attr('disabled', false);
                    $('#cancelEditMentor').attr('disabled', false);
                    $('#saveEditMentorLoader').hide();
                    $('#editMentor').find('.close').show();

                } else {
                    $.ajax({
                        type: 'POST',
                        dataType: 'JSON',
                        data: form_data,
                        url: '<?= $this->createUrl('user/EditMentor') ?>',
                        success: function (data) {
                            if (data['status'] !== 'success') {
                                $('.edit_mentor_error_text').html(err_txt);
                                $('.edit_mentor_error_block').slideDown('fast', function () {
                                    $('.edit_mentor_error_block').fadeTo(600, 0.2, function () {
                                        $('.edit_mentor_error_block').fadeTo(600, 1);
                                    });
                                });
                                $('#saveEditMentor').attr('disabled', false);
                                $('#cancelEditMentor').attr('disabled', false);
                                $('#saveEditMentorLoader').hide();
                                $('#editMentor').find('.close').show();

                            } else {
                                MentorsListTable.destroy();
                                InitMentorTabulator();
                                
                                $('#saveEditMentor').attr('disabled', false);
                                $('#cancelEditMentor').attr('disabled', false);
                                $('#saveEditMentorLoader').hide();
                                $('#editMentor').find('.close').show();
                                $('#editMentor').modal('hide');
                                
                                $('#editMentorForm').trigger("reset");
                                $.toast({
                                    title: 'Готово!',
                                    content: 'Руководитель изменен!',
                                    type: 'success',
                                    delay: 5000,
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