<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Customer Detail</title>
</head>
<body>
<h1>Customer Detail</h1>
Name:{{$customers->name}}<p></p>
Email:{{$customers->email}}<p></p>
Password:{{$customers->password}}<p></p>
<a href="/customer/edit/{{$customers->id}}"><button>Update</button></a>
<button>Delete</button>
</body>
</html>
