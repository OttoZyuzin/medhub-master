<?php \Core\View::renderHeader(); ?>

<div class="block-right">
    <h1>Список категории</h1>

    <div class="add-link">
        <a href='category/add'>Добавить категорию</a>
    </div>

    <div class="dashboard-form">
        <table>
            <thead>
                <tr>
                    <th></th>
                    <th>Название</th>
                    <th></th>
                </tr>
                <?php
                    foreach ($categories as $key => $value) {
                        echo
                            '<tr>
                                <td class="form-control_edit">
                                    <a href=category/edit?id=' . $value->id .'>
                                        <svg class="svg-edit">
                                            <use xlink:href="#edit"></use>
                                        </svg>
                                    </a>
                                </td>
                                <td>' . $value->name_category . '</td>

                                <td>
                                    <a href=category/warning?id=' . $value->id .'>
                                        <svg class="svg-delete">
                                            <use xlink:href="#delete"></use>
                                        </svg>
                                    </a>
                                </td>
                          </tr>';
                    }
                ?>
            </thead>
        </table>
    </div>
</div>

<?php \Core\View::renderFooter(); ?>
