<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product-List</title>
</head>
<body>
    @foreach($products as $product)
    <h3>{{ $product->Nom }}</h3>
    <p>{{ $product->Description }}</p>
    @endforeach
</body>
</html>