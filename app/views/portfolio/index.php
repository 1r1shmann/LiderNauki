<?php
    $str_title = 'Портфолио';
?>
<div class="container">
    Все проекты в следующей таблице являются вымышленными, поэтому даже не пытайтесь перейти по приведенным ссылкам.
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Год</th>
                    <th scope="col">Проект</th>
                    <th scope="col">Описание</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                foreach ($data as $row) {
                    echo '<tr>',
                    '<th scope="row">', $i, '</th>',
                    '<td>', $row['Year'], '</td>',
                    '<td>', $row['Site'], '</td>',
                    '<td>', $row['Description'], '</td>',
                    '</tr>';
                    $i++;
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
