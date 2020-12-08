<header>
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <img src="Image/logo1.png" alt="" style="height: 70px;" />
            </div>
            <ul class="nav navbar-nav">
                <li><a href="{{ route('trangchu') }}">Home</a></li>
                <li><a href="#">Introduce</a></li>
                <li><a href="#">Beautiful Wedding Dress</a></li>
                <li><a href="#">BST Wedding Dress</a></li>
                <li><a href="#">News</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            <form class="navbar-form navbar-left" action="{{route ('search') }}" method="post">
                @csrf
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search" name="search">
                    <div class="input-group-btn">
                        <button class="btn btn-default">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </div>
                </div>
            </form>
            <ul class="nav navbar-nav navbar-right">
                @if(!Session::has('login')||!Session::get('login'))
                <li class="nav-item">
                    <div><span class="glyphicon glyphicon-user"></span></div>
                </li>
                <li class="nav-item">
                <a href="{{route('signup')}}"> 
                <button style="border: none; font-size: 16px;">Register</button></a>
                </li>
                <li class="nav-item"><span class="glyphicon glyphicon-log-in"></span>
                </li>
                <li  class="nav-item"><a href="{{route('signin')}}"> <button style="border: none; font-size: 16px;">Login</button></a></li>
                @else
                <li class="nav-item"> 
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                </li>
                <li class="nav-item">
                    <a href="{{route('getCart')}}">
                        <button style="border: none; font-size: 16px;">Cart</button>
                    </a>
                </li>
                <li class="nav-item"><span class="glyphicon glyphicon-log-in"></span>
                </li>
                <li  class="nav-item">
                <a href="{{route('logout')}}"> <button style="border: none; font-size: 16px;">Logout</button></a>
                </li>
                @endif
            </ul>
        </div>
    </nav>
    <script src="{{ asset('javaScript/cart.js')}}"></script>
</header>