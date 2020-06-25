<?php

/* @var $this yii\web\View */

use yii\widgets\LinkPager;

$this->title = 'index page';
?>

<div class="site-index">
    <div class="body-content">
        <div class="row">
            <?php
            echo "<pre>";
            foreach ($models as $key => $value) {
                echo "<div class='col-md-8'>";
                echo "<div class='panel panel-default'>";
                echo "<div class='panel-heading'>";
                echo "<h3>" . $models[$key]->name . "</h3>";
                echo "</div>";
                echo "<div class='panel-body'>";
                echo "<h4>";
                foreach ($row = $models[$key]->books as $key1 => $value1) {
                    echo "<li>" . $row[$key1]->name . "</li>";
                }
                echo "</h4>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
            }
            ?>
        </div>
        <?
        echo LinkPager::widget([
            'pagination' => $pages,

        ]);
        ?>
    </div>
</div>

