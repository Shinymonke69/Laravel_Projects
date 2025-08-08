<!DOCTYPE html>
<html>
    <head>
        <title>Lista de Produtos</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1>Listagem de Produtos</h1>
        @foreach($products as $product)
        <div>
            <p>{{$product->name}}</p>
            <p>{{$product->price}}</p>
            <p>{{$product->description}}</p>
        </div>
        @endforeach
    </body>
</html>