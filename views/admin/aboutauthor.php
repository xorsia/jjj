<?php
echo "<div class='row'>";
echo "<div class='col-md-8'>";
echo "<div class='panel panel-default'>";
echo "<div class='panel-heading'>";
echo "<pre>";
echo "<h3>".$model->name."</h3>";
echo "<hr>";
foreach ($books as $key) {
    echo "<h5><li>".$key->name."</li></h5>";
    echo "<br>";
}
echo "</div>";
echo "</div>";
echo "</div>";
echo "</div>";
