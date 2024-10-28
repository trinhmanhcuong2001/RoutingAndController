<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('user.store') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Nhập tên">
        <input type="email" name="email" placeholder="Nhập email">
        <input type="password" name="password" placeholder="Nhật mật khẩu">
        <button type="submit">Tạo</button>
    </form>
</body>

</html>
