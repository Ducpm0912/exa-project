<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('products.updatePostProduct') }}" method="POST">
        @csrf
        <input type="text" name="proId" value="{{ $product->pro_id }}">
        ten <input type="text" name="pro_name" value="{{ $product->pro_name }}">
        cate_name
        <select name="category" id="">
            @foreach ($category as $value)
                <option value="{{ $value->cate_id }} " @if ($product->category_id == $value->cate_id) selected @endif>
                    {{ $value->cate_name }}
                </option>
            @endforeach
        </select>
        price <input type="number" name="pro_price" id="" min="1" value="{{ $product->pro_price }}">
        view <input type="number" name="pro_view" id="" min="0" value="{{ $product->pro_view }}">
        <input type="submit" value="sua">
    </form>
</body>

</html>
