<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Обратная связь</title>
</head>
<body>
    <img src="{{ $message->embed(url('/email/logo.png')) }}">
    {!! $body !!}
</body>
</html>
