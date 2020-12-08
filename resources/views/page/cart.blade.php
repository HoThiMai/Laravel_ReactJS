@extends('master')
@section('content')
<script src="https://use.fontawesome.com/c560c025cf.js"></script>
<link rel="stylesheet" href="{{ asset('css/cart.css') }}">
<br>
<br>
<div class="container">
    <div class="card shopping-cart">
    <div>
                        @include('error')
                    </div>
        <div class="flash-message">
            @foreach (['danger', 'warning', 'success', 'info'] as $msg)
            @if(Session::has('alert-' . $msg))

            <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
            @endif
            @endforeach
        </div>
        <div class="card-header bg-dark text-light">
            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
            Products
            <a href="" class="btn btn-outline-info btn-sm pull-right">Continue shopping</a>
            <div class="clearfix"></div>
        </div>
        <div class="card-body">
            <!-- PRODUCT -->
            @for($i=0;$i<count($products);$i++)
            <div class="row">
                <div class="col-12 col-sm-12 col-md-2 text-center">
                    <img class="img-responsive" src='{{asset("Image/Product/".$products[$i]->image)}}' alt="prewiew" style='width:120px; height:90px' width="120" height="80">
                </div>
                <div class="col-12 text-sm-center col-sm-12 text-md-left col-md-6">
                    <h4 class="product-name"><strong>{{$products[$i]->name}}</strong></h4>
                    <h4>
                        <small>{{$products[$i]->description}}</small>
                    </h4>
                </div>
                <div class="col-12 col-sm-12 text-sm-center col-md-4 text-md-right row">
                    <div>
                        <form action="{{ route('saveSizeRental',$products[$i]->id) }}" method="post"> 
                            @csrf
                        <select name="sizes" id="cars" class="btn btn-mini" onchange="saveRemind()">
                        @foreach($sizes as $sizess)
                            @if($sizess)
                            @if($sizess[0]->id_pro==$products[$i]->id)
                                @foreach($sizess as $size)
                                    @if($carts[$i]->id_size == $size->id_size)
                                    <option value="{{$size->id_size}}" selected>{{$size->name}}</option>
                                    @else
                                    <option value="{{$size->id_size}}">{{$size->name}}</option>
                                    @endif
                                @endforeach
                            @endif
                            @endif
                        @endforeach                    
                        </select>
                        <select name="days" id="cars" class="btn btn-mini" onchange="saveRemind()">
                        @for($j = 2; $j < 8; $j=$j+2)
                            @if($j == $carts[$i]->rental_time)
                            <option value="{{$j}}" selected>{{$j}} days</option>
                            @else
                            <option value="{{$j}}">{{$j}} days</option>
                            @endif
                        @endfor
                        </select>
                        <button class="btn btn-primary" type="submit"><i class="fas fa-save"></i></button>
                        </form>
                    
                    </div>
                    <div class="col-3 col-sm-3 col-md-6 text-md-right" style="padding-top: 5px">
                        <h6><strong>{{$products[$i]->promotion_price==0?number_format($products[$i]->unit_price):number_format($products[$i]->promotion_price)}}(vnd) <span class="text-muted">x</span></strong></h6>
                        <div class="col-4 col-sm-4 col-md-4 quantity">

                            <div> <a href="{{route('addQuantity',$products[$i]->id)}}"><button class="btn btn-info btn-add" id="plus">+</button></a></div>
                           <div><input type="number" style="-webkit-appearance: none;" step="1" max="99" min="1" 
                           value="{{$products[$i]->quantity}}" title="Qty" id="{{$products[$i]->id}}" 
                           class="qty" size="4" readonly class="qty"></div>
                            <div><a href="{{route('minusQuantity',$products[$i]->id)}}"><button type="button"class="btn btn-success btn-minus" id="minus">-</button></a></div>
                     
                         </div>
                    </div>
                    <div class="col-2 col-sm-2 col-md-2 text-right">
                    <a href="{{route('removeCart',$products[$i]->id)}}">
                        <button type="button" class="btn btn-outline-danger btn-xs btn-delete">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                        </button>
                    </a>
                    </div>
                </div>
            </div>
            <hr>
            @endfor
            <!-- END PRODUCT -->
            <!-- PRODUCT -->
            <!-- checkout -->
            <div class="row">
            <form action="{{route('checkout')}}" method="post" id="checkout-form" style="display:none">
            @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Name <span class="required">(*)</span></label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp" placeholder="Name...">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Email <span class="required">(*)</span></label>
                    <input type="email" class="form-control" id="exampleInputPassword1"name="email" placeholder="Email...">
                </div>
                <div class="form-group">
                    <label for="fn">Phone number <span class="required">(*)</span></label>
                    <input type="text" class="form-control" id="fn"name="phone" placeholder="Phone...">
                </div>
                <div class="form-group">
                    <label for="add">Address <span class="required">(*)</span></label>
                    <input type="text" class="form-control" id="add" name="address" placeholder="Address...">
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="male" checked>
                    <label class="form-check-label" for="exampleRadios1">
                        Male
                    </label>
                    <input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="female">
                    <label class="form-check-label" for="exampleRadios2">
                        Female
                    </label>
                </div>
                
                <div class="form-group">
                    <label for="note">Notes <span>(optional)</span></label>
                    <textarea name="note" id="note" cols="110" rows="10"></textarea>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="radio" name="payment" id="exampleRadios1" value="ADD" checked>
                    <label class="form-check-label" for="exampleRadios1">
                        After recived products
                    </label>
                    <input class="form-check-input" type="radio" name="payment" id="exampleRadios2" value="COD">
                    <label class="form-check-label" for="exampleRadios2">
                        Credit Card
                    </label>
                </div>
                <input type="text" value="{{ number_format($totalPrice)}}" hidden name="totalPrice"> 
                <button type="submit" class="btn btn-primary">Checkout</button>
                </form>
            </div>
            <div class="pull-right">
                <a href="{{route('trangchu')}}" class="btn btn-outline-secondary pull-right">
                    Update shopping cart
                </a>
            </div>
        </div>
        <div class="card-footer">
            <div id="demo" class="collapse">
                   
            </div>
            <div class="pull-right" style="margin: 10px">
                <button type="button" class="btn btn-success pull-right" id="checkout-btn" onclick="showCheckout()">Checkout</button>
                <div class="pull-right" style="margin: 5px">
                    Total price: <b><span id="displayTotalPrice">{{ number_format($totalPrice)}}</span>(vnd)</b>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<script src="{{asset('/javaScript/cart.js')}}"></script>
@endsection