<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('users.addPostUsers') }}" method="POST">
        @csrf
        ten user <input type="text" name="name">
        email <input type="email" name="email" id="">
        phong ban 
        <select name="phongban" id="">
            @foreach ($phongban as $value )
                <option value="{{ $value->id }}">
                    {{ $value->ten_donvi }}
                </option>
            @endforeach
        </select>
        tuoi <input type="number" name="tuoi" id="" min="1">
        so ngay nghi <input type="number" name="songaynghi" id="" >
        <input type="submit" value="them moi">
    </form>
</body>
</html>