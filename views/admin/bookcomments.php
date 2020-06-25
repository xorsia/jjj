<?php

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

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
                            <?= $form->field($comments, 'book_id')->hiddenInput( ['value' => $model->id]) ?>
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
                        echo "<pre>";

                        foreach ($comments_list as $key){
                            print_r($key->admin_name);
                            echo "<br>";
                            print_r($key->text);
                            echo "<br>";
                            print_r($key->date);
                            echo "<br>";
                            echo "<hr>";
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
