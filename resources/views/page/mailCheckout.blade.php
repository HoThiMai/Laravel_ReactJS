<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Hung Hoa Mai Shop</title>
</head>
<body>
    <h2>Dear {{$name_cus}},</h2>
    <p>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Quantity</th>
            <th scope="col">Color</th>
            <th scope="col">Size</th>
            <th scope="col">Total</th>
            </tr>
        </thead>
        <tbody>
            @for($i = 0; $i < count($products);$i++)
            <tr>
            <th scope="row">{{$i+1}}</th>
            <td>{{$products[$i]->name}}</td>
            <td>{{$products[$i]->price}}</td>
            <td>{{$products[$i]->quantity}}</td>
            <td>{{$products[$i]->color}}</td>
            <td>{{$products[$i]->size}}</td>
            <td>{{$products[$i]->quantity*$products[$i]->price}}</td>
            </tr>
            @endfor
        </tbody>
        </table>
    </p>
    <p>
        <h3>Payment: {{$total_price}}vnd</h3>
    </p>
    <h3>
        Best regards, <br>
        Hung Hoa Mai Shop
    </h3>
</body>
</html>