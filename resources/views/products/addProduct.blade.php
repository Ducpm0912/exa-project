<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('products.addPostProduct') }}" method="POST">
        @csrf
        ten <input type="text" name="pro_name">
        cate_name
        <select name="category" id="">
            @foreach ($category as $value)
                <option value="{{ $value->cate_id }}">
                    {{ $value->cate_name }}
                </option>
            @endforeach
        </select>
        price <input type="number" name="pro_price" id="" min="1">
        view <input type="number" name="pro_view" id="" min="0">
        <input type="submit" value="them moi">
    </form>
</body>

</html>
