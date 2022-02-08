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
    <h1 class="uk-heading-medium">Добавить книгу</h1>
    <form class="formochka" method="POST" action="/book/add">
        <fieldset class="uk-fieldset">
            <input type="hidden" name="author_id" value="{{$author->id}}"/>
            <div class="uk-margin">
                <input required class="uk-input" type="text" name="title" placeholder="Заголовок">
            </div>
            <div class="uk-margin">
                <input required class="uk-input" type="text" name="content" placeholder="Содержание">
            </div>
        </fieldset>
        <button type="submit" class="uk-button uk-button-primary">Добавить книгу</button>
    </form>
    <h1 class="uk-heading-medium">Автор:{{$author->name}}</h1>
    <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match" uk-grid>

        @foreach($books as $book)
            <div>
                <div class="uk-card uk-card-default uk-card-body">
                    <h3 class="uk-card-title">{{$book->title}}</h3>
                    <p>Текст книги - ну или ссылка на неё: {{$book->content}}</p>
                    <p><a class="uk-text-success" href="/book/{{$book->id}}/edit">Редактировать</a>
                        <a class="uk-text-danger" href="/book/{{$book->id}}/destroy">Удалить</a></p>
                </div>
            </div>
        @endforeach
    </div>
</div>
</body>
<script src="{{asset('/js/uikit-icons.min.js')}}"></script>
<script src="{{asset('/js/uikit.min.js')}}"></script>
</html>
