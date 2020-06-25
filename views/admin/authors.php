<?php
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
                $author_id =$models[$key]->id;
                echo "<h4>";
                echo "Написал(а) "."<a href='aboutauthor?id=$author_id'>".count($models[$key]->books)."</a>"." книг";

                echo "</h4>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
            }
            //            ?>
        </div>
        <?
        echo LinkPager::widget([
            'pagination' => $pages,

        ]);
        ?>
    </div>
</div>

