@extends('master')
@section('content')
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <img src="Image/Slideshow/{{$slide[0]->image}}" alt="">
        </div>
        @for($i = 1; $i<count($slide); $i++) <div class="item">
            <img src="Image/Slideshow/{{$slide[$i]->image}}" alt="">
    </div>
    @endfor
</div>

<!-- Left and right controls -->
<a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
</a>
<a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
</a>
</div>
<div class="container-fluid">
    <!-- left -->
    <div class="row">
    <form action="{{route ('search') }}" class="col-sm-4" method="post">
            @csrf
            <h1>CATEGORIES</h1>
            <br>
            <ul class="list-group">
                <li class="list-group-item">TYPES
                    <hr />
                    @foreach($product_types as $item)
                    <div class="form-check">
                        <label class="form-check-label" for="radio1">
                            <input type="radio" class="form-check-input" id="radio1" name="type" value="{{$item->id}}"> {{$item->name}}
                        </label>
                    </div>
                    @endforeach
                </li>
                <li class="list-group-item">COLORS
                    <hr />
                    @foreach($colors as $item)
                    <div class="form-check">
                        <label class="form-check-label" for="radio1">
                            <input type="radio" class="form-check-input" id="radio1" name="color" value="{{$item->id}}">{{ $item->name}}
                        </label>
                    </div>
                    @endforeach

                </li>
                <li class="list-group-item">PRICE
                    <hr />
                    <div class="form-check">
                        <label class="form-check-label" for="radio1">
                            <input type="radio" class="form-check-input" id="radio1" name="price" value="500"> Under 500.000 VND
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="radio2" name="price" value="1000"> From 500.000 To 1.000.000 VND
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="radio3" name="price" value="2000"> From 1.000.000 To 2.000.000 VND
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="radio4" name="price" value="5000"> From 2.000.000 To 5.000.000 VND
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="radio5" name="price" value="6000"> Over 5.000.000 VND
                        </label>
                    </div>
                </li>
                <li class="list-group-item"><button class="btn btn-primary">Filter products</button></li>
            </ul>

        </form>
        <!-- right -->
        <div class="col-sm-8">
            <h1>
                Result
                <hr />
            </h1>
            <div class="row">
                @foreach ($products as $item)
                <div class="col-sm-4">
                    <div class="hovereffect">
                        <img class="img-responsive" src="Image/Product/{{$item->image}}" alt="" style="width:90%">
                        <div class="overlay">
                            <h2>{{$item->name}}</h2>
                            <a class="info" href="{{route('detail',$item->id)}}">Detail</a>
                            @if(Session::has('login')&&Session::get('login')!=false)
                            <a class="info" href="{{route('addCart',$item->id)}}">Add to Cart</a>
                            @else
                            <a class="info" onclick="haveNotLogin()">Add to Cart</a>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </div>
</div>
<br>
<br>
@endsection