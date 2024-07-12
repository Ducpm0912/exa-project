<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <a href="{{ route('users.addUsers') }}">add new</a>
    <table border="1">
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>email</th>
                <th>phong ban</th>
                <th>tuoi</th>
                <th>so ngay nghi</th>
                <th>hanh dong</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($listUsers as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->ten_donvi }}</td>
                    <td>{{ $user->tuoi }}</td>
                    <td>{{ $user->songaynghi }}</td>
                    <td><a href="{{ route('users.deleteUser', $user->id) }}">xoa</a>||
                        <a href="{{ route('users.updateUser', $user->id) }}">sua</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
