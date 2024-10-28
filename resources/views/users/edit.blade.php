<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('user.update', $user->id) }}" method="POST">
        @method('PUT')
        @csrf
        <input type="text" name="name" placeholder="Nhập tên" value="{{ $user->name }}">
        <input type="email" name="email" placeholder="Nhập email" value="{{ $user->email }}">
        <input type="password" name="password" placeholder="Nhập mật khẩu">
        <button type="submit">Cập nhật</button>
    </form>
</body>

</html>
