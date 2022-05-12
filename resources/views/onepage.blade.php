<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{
            margin-top: 30px;

        }
        h2{
            text-align: center;
        }
        form {
            /* Расположим форму по центру страницы */
            margin: 0 auto;
            width: 400px;
            /* Определим контур формы */
            padding: 1em;
            border: 1px solid #CCC;
            border-radius: 1em;
        }

        ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        form li + li {
            margin-top: 1em;
        }

        label {
            /* Определим размер и выравнивание */
            display: inline-block;
            width: 90px;
            text-align: right;
        }

        input,select,
        textarea {
            /* Убедимся, что все поля имеют одинаковые настройки шрифта
               По умолчанию в textarea используется моноширинный шрифт */
            font: 1em sans-serif;

            /* Определим размер полей */
            width: 300px;
            box-sizing: border-box;

            /* Стилизуем границы полей */
            border: 1px solid #999;
        }

        input:focus,
        textarea:focus {
            /* Дополнительная подсветка для элементов в фокусе */
            border-color: #000;
        }

        textarea {
            /* Выравним многострочные текстовые поля с их текстами-подсказками */
            vertical-align: top;

            /* Предоставим пространство для ввода текста */
            height: 5em;
        }

        .button {
            /* Выравним кнопки с их текстами-подсказками */
            padding-left: 90px; /* same size as the label elements */


        }

        button {
            /* Этот дополнительный внешний отступ примерно равен расстоянию
               между текстами-подсказками и текстовыми полями */

            outline: 0;
            cursor: pointer;
            border: none;
            border-bottom: 5px solid #e0121e;
            background: linear-gradient( 0deg, #ec212b, #fa7169);
            color: #fff;
            font-size: 10px;
            font-family: sans-serif;
            text-transform: uppercase;
            padding: 10px;
            border-radius: 100px 100px 100px 100px / 200% 200%;
            box-shadow: 0px 10px 15px 0px rgba(212, 36, 77, 0.75);
            text-shadow: 1px 1px 1px gray, 0 0 1em red;

        }
    </style>
</head>
<body>
<form action="" method="post" >
    <h2>Введите данные</h2>
    <ul>
        <li>
            <label for="name">ФИО:</label>
            <input type="text" id="name" name="user_name">
        </li>
        <li>
            <label for="age">Возраст:</label>
            <input type="text" id="age" name="user_age">
        </li>
        <li>
            <label for="age">Страна:</label>
            <select>
                <option>Россия</option>
                <option>Беларусь</option>
                <option>Казахстан</option>
            </select>
        </li>
        <li>
            <label for="address">Адрес:</label>
            <input type="text" id="address" name="user_address">
        </li>
        <li>
            <label for="hobby">Увлечения:</label>
            <textarea id="hobby" name="user_message_hobby"></textarea>
        </li>
        <li>
            <label for="me">О себе:</label>
            <textarea id="me" name="user_message_me"></textarea>
        </li>
        <li class="button">
            <button type="submit">Отправить</button>
        </li>
    </ul>
</form>
</body>
</html>
