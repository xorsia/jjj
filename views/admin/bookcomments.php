<?php

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\widgets\LinkPager;

?>
<div class="site-index">
    <div class="body-content">
        <div class="row">
            <div class='panel panel-default'>
                <div class='panel-heading'>
                    <?php
                    echo '<h3> Книга ' . $model->name . '</h3>';
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5">
                    <div class='panel panel-default'>
                        <div class='panel-heading'>
                            <?php $form = ActiveForm::begin(['id' => 'book-comments']); ?>
                            <?= $form->field($comments, 'admin_name')->Input('admin_name', ['value' => Yii::$app->user->identity->username]) ?>
                            <?= $form->field($comments, 'book_id')->hiddenInput(['value' => $model->id]) ?>
                            <?= $form->field($comments, 'text')->textarea(['rows' => 9]) ?>
                            <div class="form-group">
                                <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary', 'name' => 'add-comments']) ?>
                            </div>

                            <?php ActiveForm::end(); ?>
                        </div>
                    </div>

                </div>
                <div class="col-lg-7">
                    <?php
                    if ($comments_list != null) {
                        foreach ($comments_list as $key) {
                            echo "<div class='panel panel-default'>";
                            echo "<div class='panel-heading'>";
                            echo "<h4> $key->admin_name </h4>";
                            echo "<h5>$key->text </h5>";
                            echo "<h6 class='text-right'> $key->date</h6>";
                            echo "</div>";
                            echo "</div>";
                        }
                    }
                    echo LinkPager::widget([
                        'pagination' => $pages,
                    ]);
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
