<!doctype html>
<html lang="ru">
<head>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('/css/uikit.min.css')}}" />
    <link rel="stylesheet" href="{{asset('/css/uikit-rtl.min.css')}}" />
    <title>Test</title>
</head>
<body>
<div  class="uk-container uk-conbtainer-small">
    <h1 class="uk-heading-medium">Редактировать книгу</h1>
    <form class="formochka" method="POST" action="/book/{{$id}}/patch">
        <fieldset class="uk-fieldset">
            <input type="hidden" name="book_id" value="{{$id}}"/>
            <div class="uk-margin">
                <input required class="uk-input" type="text" name="title" placeholder="Заголовок">
            </div>
            <div class="uk-margin">
                <input required class="uk-input" type="text" name="content" placeholder="Содержание">
            </div>
        </fieldset>
        <button type="submit" class="uk-button uk-button-primary">Редактировать</button>
    </form>
</div>
</body>
<script src="{{asset('/js/uikit-icons.min.js')}}"></script>
<script src="{{asset('/js/uikit.min.js')}}"></script>
</html>
