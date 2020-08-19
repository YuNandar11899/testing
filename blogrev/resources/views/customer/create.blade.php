<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Customer Create</title>
</head>
<body>
<h1>Customer Create</h1>
<form action="/customeradd" method="post">
    @csrf
<label for="name">Customer Name</label>
<input type="text" name="name"><p></p>
<label for="email">Customer Email</label>
<input type="email" name="email"><p></p>
<label for="password">Customer Password</label>
<input type="password" name="password"><p></p>
<input type="submit" value="Add">
</form>
</body>
</html>
