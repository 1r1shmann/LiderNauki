<div id="_user_educational_institutions" class="pb-3">
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#user_educational_institutions_content" aria-expanded="true" aria-controls="user_educational_institutions_content" title="Скрыть/раскрыть секцию">
                    &#8645; Образовательные учреждения
                </button>
            </h5>
        </div>
        <div id="user_educational_institutions_content" class="collapse show" aria-labelledby="user_educational_institutions_content" data-parent="#_user_educational_institutions">
            <div class="card-body">
                <div class="row data-row">
                    <div id="InstitutionsListTable"></div>
                </div>
                <div class="row data-row">
                    <div class="col-12 text-center">
                        <button class="btn btn-secondary" data-toggle="modal" data-target="#addInstitution">
                            Добавить учреждение
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="addInstitution" tabindex="-1" role="dialog" aria-labelledby="addInstitutionTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <form action="" id="addInstitutionForm">
                <div class="modal-header">
                    <h5 class="modal-title" id="addInstitutionTitle">Добавить образовательное учреждение</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon_name">Наименование образовательного учреждения:</span>
                        </div>
                        <input id="eudf_last_name" name="name" required="true" type="text" class="form-control" placeholder="Введите наименование..." aria-describedby="addon_name" value="">
                    </div>
                    <div class="alert alert-danger" role="alert">
                        НЕ УКАЗЫВАЙТЕ город в графе "Наименования образовательного учреждения"! Для этого есть отдельное поле внизу.
                    </div>
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon_country">Страна:</span>
                        </div>
                        <input id="eudf_country" name="country" required="true" type="text" class="form-control" aria-describedby="addon_country" value="">
                    </div>
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon_region">Область / край:</span>
                        </div>
                        <input id="eudf_region" name="region" required="true" type="text" class="form-control" aria-describedby="addon_region" value="">
                    </div>
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon_district">Район:</span>
                        </div>
                        <input id="eudf_district" name="district" accept=""type="text" class="form-control" aria-describedby="addon_district" value="">
                    </div>
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon_city">Населённый пункт:</span>
                        </div>
                        <input id="eudf_city" name="city" required="true" type="text" class="form-control" aria-describedby="addon_city" value="">
                    </div>
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon_post_code">Почтовый индекс:</span>
                        </div>
                        <input id="eudf_post_code" name="post_code" required="true" type="text" class="form-control" aria-describedby="addon_post_code" value="">
                    </div>
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon_address">Улица, дом:</span>
                        </div>
                        <input id="eudf_address" name="address" required="true" type="text" class="form-control" aria-describedby="addon_address" value="">
                    </div>
                    <div class="row data-row add_institution_error_block hide">
                        <div class="col-12 alert-danger add_institution_error_text border border-danger"></div>
                    </div>
                </div>
                <div class="modal-footer">
                    <img src="<?= $this->createUrl('public/images/loaders/loader.gif') ?>" id="saveAddInstitutionLoader" class="mx-3 hide" style="width: 32px">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" id="canceAddInstitution">Отмена</button>
                    <button type="submit" class="btn btn-primary" id="saveInstitution">Сохранить</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="deleteInstitution" tabindex="-1" role="dialog" aria-labelledby="deleteInstitutionTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteInstitutionTitle">Удаление образовательного учреждения</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Вы уверены, что хотите удалить образовательное учреждение <strong><span class="institutionName"></span></strong> под номером <strong>#<span class="institutionId"></span></strong>?</p>
                <div class="row data-row delete_institution_error_block hide">
                    <div class="col-12 alert-danger delete_institution_error_text border border-danger"></div>
                </div>
            </div>
            <div class="modal-footer">
                <img src="<?= $this->createUrl('public/images/loaders/loader.gif') ?>" id="InstitutionDeleteLoader" class="mx-3 hide" style="width: 32px">
                <button type="button" class="btn btn-secondary" id="cancelInstitutionDelete" data-dismiss="modal">Отмена</button>
                <button type="button" class="btn btn-danger" id="confirmInstitutionDelete">Удалить</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="editInstitution" tabindex="-1" role="dialog" aria-labelledby="deleteInstitutionTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div id="editInstitutionWaitBlock">
                <div class="modal-header">
                    <h5 class="modal-title" id="addInstitutionTitle">Изменить данные</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body center-align">
                    <div class="row waitText">
                        <div class="col-12">Пожалуйста подождите... <img src="<?= $this->createUrl('public/images/loaders/loader.gif') ?>" class="mx-3" style="width: 32px"></div>
                    </div>
                    <div class="row editInstitutionWaitErrorBlock ">
                        <div class="col-12 alert-danger editInstitutionWaitErrorBlockText border border-danger">as</div>
                    </div>
                </div>
            </div>
            <form action="" id="editInstitutionForm" class="hide">
                <input type="hidden" name="institution_id" value="">
                <div class="modal-header">
                    <h5 class="modal-title" id="addInstitutionTitle">Изменить данные</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon_name">Наименование образовательного учреждения:</span>
                        </div>
                        <input id="eudf_name" name="name" required="true" type="text" class="form-control" placeholder="Введите наименование..." aria-describedby="addon_name" value="">
                    </div>
                    <div class="alert alert-danger" role="alert">
                        НЕ УКАЗЫВАЙТЕ город в графе "Наименования образовательного учреждения"! Для этого есть отдельное поле внизу.
                    </div>
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon_country">Страна:</span>
                        </div>
                        <input id="eudf_country" name="country" required="true" type="text" class="form-control" aria-describedby="addon_country" value="">
                    </div>
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon_region">Область / край:</span>
                        </div>
                        <input id="eudf_region" name="region" required="true" type="text" class="form-control" aria-describedby="addon_region" value="">
                    </div>
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon_district">Район:</span>
                        </div>
                        <input id="eudf_district" name="district" accept=""type="text" class="form-control" aria-describedby="addon_district" value="">
                    </div>
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon_city">Населённый пункт:</span>
                        </div>
                        <input id="eudf_city" name="city" required="true" type="text" class="form-control" aria-describedby="addon_city" value="">
                    </div>
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon_post_code">Почтовый индекс:</span>
                        </div>
                        <input id="eudf_post_code" name="post_code" required="true" type="text" class="form-control" aria-describedby="addon_post_code" value="">
                    </div>
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon_address">Улица, дом:</span>
                        </div>
                        <input id="eudf_address" name="address" required="true" type="text" class="form-control" aria-describedby="addon_address" value="">
                    </div>
                    <div class="row data-row edit_institution_error_block hide">
                        <div class="col-12 alert-danger edit_institution_error_text border border-danger"></div>
                    </div>
                </div>
                <div class="modal-footer">
                    <img src="<?= $this->createUrl('public/images/loaders/loader.gif') ?>" id="saveEditInstitutionLoader" class="mx-3 hide" style="width: 32px">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" id="cancelEditInstitution">Отмена</button>
                    <button type="submit" class="btn btn-primary" id="saveEditInstitution">Сохранить</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script type="text/javascript">
    var InstitutionsListTable;
    var InstitutionsListTableRow;
    var deleteinstitutionId;
    var deleteinstitutionName;
    var editinstitutionId;
    var editinstitutionName;
    
    function InitInstitutionTabulator(){
        InstitutionsListTable = new Tabulator("#InstitutionsListTable", {
            placeholder: "Нет данных",
            columns:[
                {field:"edit", formatter:"html", headerSort:false, width: "10%"},
                {title:"Наименование", field:"name", sorter:"string", hozAlign:"left", width: "80%"},
                {field:"delete", formatter:"html", headerSort:false,  width: "10%"},
            ],
            pagination: "local", 
            ajaxURL: "<?= $this->createUrl('user/ViewInstitutionListAjax') ?>",
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
        InitInstitutionTabulator();
    } );

    $(document).on('submit', '#addInstitutionForm', function (event) {
        event.preventDefault();

        $('.add_institution_error_text').html('');
        $('.add_institution_error_block').slideUp('fast');
        $('#saveInstitution').attr('disabled', true);
        $('#canceAddInstitution').attr('disabled', true);
        $('#saveAddInstitutionLoader').show();

        let form_data = $('#addInstitutionForm').serialize();
        $.ajax({
            type: 'POST',
            dataType: 'JSON',
            data: form_data,
            url: '<?= $this->createUrl('user/AddInstitutionValidate') ?>',
            success: function (data) {
                if (data['status'] !== 'success') {
                    var err_txt = '';
                    for (i in data['msg']) {
                        err_txt = err_txt + '<div>• ' + data['msg'][i] + '</div> ';
                    }
                    $('.add_institution_error_text').html(err_txt);
                    $('.add_institution_error_block').slideDown('fast', function () {
                        $('.add_institution_error_block').fadeTo(600, 0.2, function () {
                            $('.add_institution_error_block').fadeTo(600, 1);
                        });
                    });
                    $('#saveInstitution').attr('disabled', false);
                    $('#canceAddInstitution').attr('disabled', false);
                    $('#saveAddInstitutionLoader').hide();

                } else {
                    $.ajax({
                        type: 'POST',
                        dataType: 'JSON',
                        data: form_data,
                        url: '<?= $this->createUrl('user/AddInstitution') ?>',
                        success: function (data) {
                            if (data['status'] !== 'success') {
                                $('.add_institution_error_text').html(data['msg']);
                                $('.add_institution_error_block').slideDown('fast', function () {
                                    $('.add_institution_error_block').fadeTo(600, 0.2, function () {
                                        $('.add_institution_error_block').fadeTo(600, 1);
                                    });
                                });
                                $('#saveInstitution').attr('disabled', false);
                                $('#canceAddInstitution').attr('disabled', false);
                                $('#saveAddInstitutionLoader').hide();

                            } else {
                                InstitutionsListTable.destroy();
                                InitInstitutionTabulator();
                                
                                $('#addInstitution').modal('hide');
                                $('#saveInstitution').attr('disabled', false);
                                $('#saveAddInstitutionLoader').attr('disabled', false);
                                $('#saveAddInstitutionLoader').hide();
                                
                                $('#addInstitutionForm').trigger("reset");
                                $.toast({
                                    title: 'Готово!',
                                    content: 'Новое образовательное учреждение добавлено!',
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
    
    $(document).on('click', '.deleteinstitutionsButton', function(){
        deleteinstitutionId = $(this).data('institutionsid');
        deleteinstitutionName = $(this).closest('.tabulator-row').find('[tabulator-field=name]').text().trim();
        
        $('#deleteInstitution').find('.institutionName').html(deleteinstitutionName);
        $('#deleteInstitution').find('.institutionId').html(deleteinstitutionId);
        $('#deleteInstitution').modal('show');
    });
    
    $(document).on('click', '#confirmInstitutionDelete', function(){
        
        $('.delete_institution_error_text').html('');
        $('.delete_institution_error_block').slideUp('fast');
        $('#confirmInstitutionDelete').attr('disabled', true);
        $('#cancelInstitutionDelete').attr('disabled', true);
        $('#InstitutionDeleteLoader').show();
        $('#deleteInstitution').find('.close').hide();
        
        $.ajax({
            type: 'POST',
            dataType: 'JSON',
            data: { 
                deleteinstitutionId: deleteinstitutionId
            },
            url: '<?= $this->createUrl('user/DeleteInstitution') ?>',
            success: function (data) {
                if (data['status'] !== 'success') {
                    $('.delete_institution_error_text').html(data['msg']);
                    $('.delete_institution_error_block').slideDown('fast', function () {
                        $('.delete_institution_error_block').fadeTo(600, 0.2, function () {
                            $('.delete_institution_error_block').fadeTo(600, 1);
                        });
                    });
                    $('#confirmInstitutionDelete').attr('disabled', false);
                    $('#cancelInstitutionDelete').attr('disabled', false);
                    $('#InstitutionDeleteLoader').hide();
                    $('#deleteInstitution').find('.close').show();

                } else {
                    InstitutionsListTable.destroy();
                    InitInstitutionTabulator();

                    $('#deleteInstitution').modal('hide');
                    $('#confirmInstitutionDelete').attr('disabled', false);
                    $('#cancelInstitutionDelete').attr('disabled', false);
                    $('#InstitutionDeleteLoader').hide();
                    $('#deleteInstitution').find('.close').show();

                    $.toast({
                        title: 'Готово!',
                        content: 'Образовательное учреждение удалено!',
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
    
    $(document).on('click', '.editInstitutionButton', function(){
        editinstitutionId = $(this).data('institutionsid');
        $('#editInstitution').find('.institutionName').html(editinstitutionName);
        $('#editInstitution').find('.institutionId').html(editinstitutionId);
        $('#editInstitution').modal('show');
        
        $('#editInstitutionWaitErrorBlockText').html('');
        $('.editInstitutionWaitErrorBlock').slideUp('fast');
        $('#editInstitution').find('.close').hide();
        $('#editInstitutionWaitBlock').show();
        $('#editInstitutionForm').hide();
        $('.waitText').show();
        
        
        $.ajax({
            type: 'POST',
            dataType: 'JSON',
            data: { 
                editinstitutionId: editinstitutionId
            },
            url: '<?= $this->createUrl('user/GetInstitutionAjax') ?>',
            success: function (data) {
                if (data['status'] !== 'success') {
                    $('.editInstitutionWaitErrorBlockText').html(data['msg']);
                    $('.editInstitutionWaitErrorBlock').slideDown('fast', function () {
                        $('.editInstitutionWaitErrorBlock').fadeTo(600, 0.2, function () {
                            $('.editInstitutionWaitErrorBlock').fadeTo(600, 1);
                        });
                    });
                    $('#editInstitution').find('.close').show();
                    $('.waitText').hide();

                } else {
                    $('#editInstitutionForm').find('[name=institution_id]').val(editinstitutionId);
                    $('#editInstitutionForm').find('[name=name]').val(data['school']['name']);
                    $('#editInstitutionForm').find('[name=country]').val(data['school']['country']);
                    $('#editInstitutionForm').find('[name=region]').val(data['school']['region']);
                    $('#editInstitutionForm').find('[name=district]').val(data['school']['district']);
                    $('#editInstitutionForm').find('[name=city]').val(data['school']['city']);
                    $('#editInstitutionForm').find('[name=post_code]').val(data['school']['post_code']);
                    $('#editInstitutionForm').find('[name=address]').val(data['school']['address']);
                    
                    
                    $('#editInstitutionWaitBlock').hide();
                    $('#editInstitution').find('.close').show();
                    $('#editInstitutionForm').show();
                }
                return false;
            }
        });
        
    });
    
    $(document).on('submit', '#editInstitutionForm', function (event) {
        event.preventDefault();

        $('.edit_institution_error_text').html('');
        $('.edit_institution_error_block').slideUp('fast');
        $('#saveEditInstitution').attr('disabled', true);
        $('#cancelEditInstitution').attr('disabled', true);
        $('#saveEditInstitutionLoader').show();
        $('#editInstitution').find('.close').hide();

        let form_data = $('#editInstitutionForm').serialize();
        $.ajax({
            type: 'POST',
            dataType: 'JSON',
            data: form_data,
            url: '<?= $this->createUrl('user/AddInstitutionValidate') ?>',
            success: function (data) {
                if (data['status'] !== 'success') {
                    var err_txt = '';
                    for (i in data['msg']) {
                        err_txt = err_txt + '<div>• ' + data['msg'][i] + '</div> ';
                    }
                    $('.edit_institution_error_text').html(err_txt);
                    $('.edit_institution_error_block').slideDown('fast', function () {
                        $('.edit_institution_error_block').fadeTo(600, 0.2, function () {
                            $('.edit_institution_error_block').fadeTo(600, 1);
                        });
                    });
                    $('#saveEditInstitution').attr('disabled', false);
                    $('#cancelEditInstitution').attr('disabled', false);
                    $('#saveEditInstitutionLoader').hide();
                    $('#editInstitution').find('.close').show();

                } else {
                    $.ajax({
                        type: 'POST',
                        dataType: 'JSON',
                        data: form_data,
                        url: '<?= $this->createUrl('user/EditInstitution') ?>',
                        success: function (data) {
                            if (data['status'] !== 'success') {
                                $('.edit_institution_error_text').html(err_txt);
                                $('.edit_institution_error_block').slideDown('fast', function () {
                                    $('.edit_institution_error_block').fadeTo(600, 0.2, function () {
                                        $('.edit_institution_error_block').fadeTo(600, 1);
                                    });
                                });
                                $('#saveEditInstitution').attr('disabled', false);
                                $('#cancelEditInstitution').attr('disabled', false);
                                $('#saveEditInstitutionLoader').hide();
                                $('#editInstitution').find('.close').show();

                            } else {
                                InstitutionsListTable.destroy();
                                InitInstitutionTabulator();
                                
                                $('#saveEditInstitution').attr('disabled', false);
                                $('#cancelEditInstitution').attr('disabled', false);
                                $('#saveEditInstitutionLoader').hide();
                                $('#editInstitution').find('.close').show();
                                $('#editInstitution').modal('hide');
                                
                                $('#editInstitutionForm').trigger("reset");
                                $.toast({
                                    title: 'Готово!',
                                    content: 'Образовательное учреждение изменено!',
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