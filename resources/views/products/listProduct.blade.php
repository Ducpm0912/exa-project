<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <a href="{{ route('products.addProduct') }}">add</a>
    <form action="">
        <input type="text" name="search" placeholder="search by name">
        <input type="submit" value="search">
    </form>
    <div class="table-responsive">
        <table class="table table-primary" border="1">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">name</th>
                    <th scope="col">cate_id</th>
                    <th scope="col">price</th>
                    <th scope="col">view</th>
                    <th scope="col">action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($listProduct as $products)
                    <tr class="">
                        <td scope="row">{{ $products->pro_id }}</td>
                        <td>{{ $products->pro_name }}</td>
                        <td>{{ $products->cate_name }}</td>
                        <td>{{ $products->pro_price }}</td>
                        <td>{{ $products->pro_view }}</td>
                        <td><a href="{{ route('products.updateProduct', $products->pro_id) }}">sua</a>
                            <a href="{{ route('products.deleteProduct', $products->pro_id) }}">xoa</a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>

</body>

</html>
