<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dictionary</title>
</head>
<body>
<h1>Dictionary</h1>
<form method="POST">
    @csrf
    <p>
        Input keyword: <input type="text" name="keyword" placeholder="input a word">
    </p>
    <p>
        <button type="submit">Translate</button>
    </p>
</form>
<?php if (isset($message)){
    echo "$message";} ?>
</body>
</html>
