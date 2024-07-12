<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('users.updatePostUser') }}" method="POST">
        @csrf
        <input type="hidden" name="userId" value="{{ $user->id }}">
        ten user <input type="text" name="name" value="{{ $user->name }}">
        email <input type="email" name="email" value="{{ $user->email }}" id="">
        phong ban
        <select name="phongban" id="">
            @foreach ($phongban as $value)
                <option value="{{ $value->id }}" @if ($user->phongban_id == $value->id) selected @endif>
                    {{ $value->ten_donvi }}
                </option>
            @endforeach
        </select>
        tuoi <input type="number" name="tuoi" value="{{ $user->tuoi }}" id="" min="1">
        so ngay nghi <input type="number" name="songaynghi" value="{{ $user->songaynghi }}" id="">
        <input type="submit" value="sua">
    </form>
</body>

</html>
