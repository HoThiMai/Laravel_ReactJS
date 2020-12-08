
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>
   body{
        
        background-color: black;
        background-size: cover;
    }
    .container{
    width:50%;
    padding: 10px;
    box-shadow: 1px 1px 1px 5px grey;
    position: absolute;
    left: 0;
    top: 50;
    right: 0;
    bottom: 50;
    margin: auto;
    background-image: url("{{asset('Image/background1.jpg')}}");
    background: linear-gradient(to right,#87CEFA, #FFB6C1);
    background-color:white;
    background-size: cover;
    margin-top: 50px;
    }
    .note
{
    text-align: left;
    color: black;
    font-weight: bold;
    font-style: italic;
    margin-left: 30px;

}
.note1
{
    text-align: center;
    color: darkblue;
    margin-bottom:20px;
}
.form-content
{
    padding: 5%;
    border: 1px solid #ced4da;
    margin-bottom: 2%;
}
.form-control{
    border-radius:1.5rem;
}
.table{
    font-weight: none;
    border-color: darkred;
    text-align: center;
    background-color: mintcream;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}
.table>thead{
    background-color:brown;
    color:white;
    position: relative;
    margin: auto;
    text-align: center;
}
.table>tbody{
    text-align: left;
}
.close{
    text-align: right;
    margin-top:0px;
}
</style>
</head>
<body>
<!------ Include the above in your HEAD tag ---------->
<div class="container register-form">
            <div class="close">
            <button><a href="{!! url('OrderManagement') !!}">Close</a></button>
            </div>
            <div class="note1">
                <h2>ORDER DETAILS INFORMATION</h2>
                <hr/>
            </div>
            <div class="form">
                <div class="note">
                @foreach($customers as $customer)
                                @if($orders["id_cus"] == $customer["id"])
                    <p>Name customer: 
                        
                                 {{$customer["name"]}}
                                 </p>
                    <p>Address: {{$customer["address"]}}</p>
                    <p>Phone number: {{$customer["phone_number"]}}</p>
                    @endif
                    @endforeach
                </div>
                <div class="form-content">
                    <div class="modal-body mx-3">
                    <table class="table table-bordered table table-hover">
                      <thead>
                        <tr>
                          <th>Product</th>
                          <th>Price</th>
                          <th>Quantity</th>
                          <th>Total</th>
                        </tr>
                      </thead>
                      <tbody>
                        
                       
                        @foreach($orderDetails as $orderDetails)
                            @if($orderDetails["id_bill"]==$orders["id"])                 
                            @foreach($products as $product)
                            @if($orderDetails["id_pro"]==$product["id"])
                        <tr>                        
                          <td>{{$product["name"]}}</td>
                          <td>{{$product["unit_price"]}}</td>
                          <td>{{$orderDetails["quantity"]}}</td>
                          <td>{{($product["unit_price"]*$orderDetails["quantity"])}}</td>
                        </tr>
                        @endif
                        @endforeach
                
                        @endif
                        @endforeach 
                      </tbody>
                    </table>
                          
                </div>

            </div>
</div>

</body>
</html>
