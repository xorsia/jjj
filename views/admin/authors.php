<?php
use yii\widgets\LinkPager;

$this->title = 'index page';
?>

<div class="site-index">
    <div class="body-content">
        <div class="row">
            <?php
            echo "<pre>";
            //            var_dump($models);
            foreach ($models as $key => $value) {
                echo "<div class='col-md-8'>";
                echo "<div class='panel panel-default'>";
                echo "<div class='panel-heading'>";
                echo "<h3>" . $models[$key]->name . "</h3>";


                echo "<h4>";
                echo "Написал(а) "."<a href='#'>".count($models[$key]->books)."</a>"." книг";

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

