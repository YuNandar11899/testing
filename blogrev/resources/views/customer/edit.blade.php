<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Customer Update</title>
</head>
<body>
<h1>Customer Update</h1>
<form action="/customer/edit/{id}" method="post">

    @csrf
    <input type="hidden" value="{{$customers->id}}" name="id">
    <label for="name">Customer Name</label>
    <input type="text" name="name" id="name" value="{{old('name')??$customer->name??""}}"><p></p>
    <label for="email">Customer Email</label>
    <input type="email" name="email"id="email" value="{{old('email')??$customer->email??""}}"><p></p>
    <label for="password">Customer Password</label>
    <input type="password" name="password" id="password" value="{{old('password')??$customer->password??""}}"><p></p>
    <input type="submit" value="Update">
</form>
</body>
</html>
