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
    <style>
        .formochka {
            margin-top:30px;
        }
    </style>
</head>
<body>
    <div class="uk-container uk-container-small">
        <form class="formochka" method="POST" action="/author">
            <fieldset class="uk-fieldset">
                <legend class="uk-legend">Добавить автора</legend>

                <div class="uk-margin">
                    <input required class="uk-input" type="text" name="name" placeholder="Имя">
                </div>
            </fieldset>
            <button type="submit" class="uk-button uk-button-primary">Создать</button>
        </form>
        <h1 class="uk-heading-medium">Авторы:</h1>

        <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match" uk-grid>
            @foreach($authors as $author)
            <div>
                <div class="uk-card uk-card-default uk-card-body">
                    <h3 class="uk-card-title">{{$author->name}}</h3>
                    <span class="uk-badge">ID:{{$author->id}}</span>
                    <p>Какой-то текст. <a href="/author/{{$author->id}}">Посмотреть книги автора</a></p>
                    <p><a class="uk-text-success" href="/author/{{$author->id}}/patch">Редактировать</a>
                    <a class="uk-text-danger" href="/author/{{$author->id}}/destroy">Удалить</a></p>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</body>
<script src="{{asset('/js/uikit-icons.min.js')}}"></script>
<script src="{{asset('/js/uikit.min.js')}}"></script>
</html>
