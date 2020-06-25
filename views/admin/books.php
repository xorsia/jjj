<?php
/* @var $this yii\web\View */

use yii\widgets\LinkPager;

?>

<div class="site-index">
    <div class="body-content">
        <div class="row">
            <?php
            foreach ($models as $model) {
                echo "<div class='col-md-6'>";
                echo "<div class='panel panel-default'>";
                echo "<div class='panel-heading'>";
                $author_id = $model->author[0]['id'];
                echo "<h3>" . $model->name . "</h3>" . "<h4><a href='aboutauthor?id=$author_id'>(" . $model->author[0]['name'] . " )</a></h4>";
                echo "<h4  class=\"text-right\" ><p><a href='#' class='text-warning'> отзывы </a></p></h4>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
            }
            echo "</div>";
            echo LinkPager::widget([
                'pagination' => $pages,

            ]);
            ?>
    </div>
</div>

