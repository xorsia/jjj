<?php
echo "<h2 class='text-center'> Добро пожаловать.</h2>";
echo "<h3>Про API: </h3>";
echo "<hr>";
echo "<li>REST API для генерации рандомного числа</li>";
echo "<ul>api/random/generate</ul>";
echo "<li>Получить результат генерации</li>";
echo "<ul>api/random/retrieve</ul>";
echo "<hr>";
echo "<li>Получить [access-token] для API (выдаст после username & password) </li>";
echo "<ul>api/admin/gettoken</ul>";
echo "<li>После получения [access-token] Можно получить доступ к [books/authors] </li>";
echo "<ul>api/user/books(authors)?token=[access-token]</ul>";
echo "<hr>";
echo "<li>Api игра - классная если не смотреть в actionGame</li>";
echo "<ul>api/random/game</ul>";
