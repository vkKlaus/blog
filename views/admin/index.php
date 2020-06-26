
<?php
require $_SERVER['DOCUMENT_ROOT'] . '/module/connect.php';

require $_SERVER['DOCUMENT_ROOT'] . '/views/layouts/index.php';
require $_SERVER['DOCUMENT_ROOT'] . '/views/layouts/header.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <script src="/js/jquery-3.5.1.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/messages/messages.ru-ru.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>

<body class="container bg-light">
    <div>
        <textarea id="editor" class="text-light">

    </textarea>
    </div>
    <script type="text/javascript">
     var editor, editorConfig;
        editorConfig = {
            locale: 'ru-ru',
            uiLibrary: 'bootstrap4'
        };
        $(document).ready(function () {
            editor = $('#editor').editor(editorConfig);
            $('#ddlLanguage').on('change', function () {
                var newLang = $(this).val();
                editorConfig.locale = newLang;
                editor.destroy(true, true);
                editor = $('#editor').editor(editorConfig);
            });
        });
    </script>
</body>

</html>