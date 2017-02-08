<?php
/**
 * Created by PhpStorm.
 * User: Andrius Mikelionis
 * Date: 2/5/2017
 * Time: 10:59 PM
 */
$userName = 'Андрюс М';
$userAge = '36';
$email = 'limavrik@gmail.com';
$city = 'Минск';
$info = 'Работал Implementation Engineer 8 лет, а в данный момент System Engineer';
if ($userName) {
?>
<!DOCTYPE html>
<html lang="ru-RU">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="обо мне">
    <meta name="keywords" content="сайт, портфолио, html, css">
    <meta name="author" content="Андрюс Микялёнис">
    <meta http-equiv="X-UA-COMPATIBLE" content="IE=edge">

    <title>Обо мне</title>

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/about.css">

</head>
<body>
<!--[if lte IE 9]>
<p>
    Ваш браузер устарел! Скачайте новую версию <a href="http://browsehappy.com/locale=ru_ru">браузера</a>
</p>
<![endif]-->
<div class="wrapper wrapper_title">
    <div class="title">
            <div class="user__info">
               Страница пользователя <?=$userName?>
            </div>
            <div class="about__picture"></div>

        <div class="about__info">
            <table class="about__table">
                <tr class="about__table-row">
                    <td width="140" class="about__table-cell">
                        <div class="about__table-field about__table-cell--first">Имя:</div>
                    </td>
                    <td class="about__table-cell">
                        <div class="about__table-field"><?=$userName?></div>
                    </td>
                </tr>
                <tr class="about__table-row">
                    <td class="about__table-cell">
                        <div class="about__table-field about__table-cell--first">Возраст:</div>
                    </td>
                    <td class="about__table-cell">
                        <div class="about__table-field"><?=$userAge?></div>
                    </td>
                </tr>
                <tr class="about__table-row">
                    <td class="about__table-cell">
                        <div class="about__table-field about__table-cell--first">Адрес e-mail:</div>
                    </td>
                    <td class="about__table-cell">
                        <div class="about__table-field"><?=$email?></div>
                    </td>
                </tr>
                <tr class="about__table-row">
                    <td class="about__table-cell">
                        <div class="about__table-field about__table-cell--first">Город:</div>
                    </td>
                    <td class="about__table-cell">
                        <div class="about__table-field"><?=$city?></div>
                    </td>
                </tr>
                <tr class="about__table-row">
                    <td class="about__table-cell">
                        <div class="about__table-field about__table-cell--first">О себе:</div>
                    </td>
                    <td class="about__table-cell">
                        <div class="about__table-field"><?=$info?></div>
                    </td>
                </tr>
            </table>
        </div>

    </div>

</div>
</body>
</html>
<?php } else { ?>
    <div>
        <h2>Пользователь не найден</h2>
    </div>
<?php }

