<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product discount calculator</title>
</head>
<body>
<h1>Product discount</h1>
<form method="post">
    @csrf
    <p>
        Product Description: <input type="text" name="product" placeholder="description">
    </p>
    <p>
        List Price: <input type="text" name="price" placeholder="list">
    </p>
    <p>
        Discount Precent: <input type="text" name="discount" placeholder="percent">
    </p>
    <p>
        <button type="submit">Calculate Percent</button>
    </p>
</form>

{{$price}}
<br>
{{$percent}}
<br>
{{$discountAmount}}
<br>
{{$discountPrice}}
</body>
</html>
