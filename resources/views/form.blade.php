<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bonjour</title>
</head>
<body>
<form action="/form" method="post">
    @csrf
    @method('post')
    <input type="text" name="nom">
    <input type="text" name="password">
    <input type="submit" name="Enregistrer">
</form>

</body>
</html>
