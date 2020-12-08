 <!DOCTYPE html>
  <html lang="en">

  <head>
      <title>Wedding Dress Shop</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <script src='https://kit.fontawesome.com/a076d05399.js'></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link rel="stylesheet" href="{{asset('css/adminPage.css')}}">
      <script src='Chart.min.js'></script>
  </head>

  <body>
      <nav class="navbar navbar-inverse">
              <div class="navbar-header">       
                  <a class="navbar-brand" href="#">
                  <img src="{{asset('Image/logo2.png')}}" alt="" height="40" width="80" />
                  </a>
                  <a class="navbar-brand" href="#">HUNG HOA MAI</a>
              </div>
              <div class="collapse navbar-collapse" id="myNavbar">
                  <ul class="nav navbar-nav navbar-right">
                      <li><a href="#">Admin</a></li>
                      <li><a href="{{route('logout')}}"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
                  </ul>
              </div>     
      </nav>
      <div class="container-fluid text-center">
          <div class="row content">
              <div class="col-sm-2 sidenav">
                  <div class="input-group">
                      <input type="text" class="form-control" placeholder="Search">
                      <div class="input-group-btn">
                          <button class="btn btn-default" type="submit">
                          <i class="glyphicon glyphicon-search"></i>
                        </button>
                      </div>
                  </div>
                  <div class="tab">
                      <a href="{!! url('indexAdmin') !!}"><button class="tablinks active">Product</button></a>
                      <hr/>
                      <a href="{!! url('OrderManagement') !!}"><button class="tablinks">Order</button></a>
                      <hr/>
                      <button class="dropdown-btn">Statistics 
                          <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-container">
                        <a href="{!! url('MonthlyChart') !!}"><button class="tablinks">Monthly </button></a>
                        <hr/>
                        <a href="{!! url('DailyChart') !!}"><button class="tablinks">Daily </button></a>
                        <hr/>
                        </div>
                  </div>

              </div>
              <div class="col-sm-10 text-left">
                <div id="Product" class="tabcontent" >
                    <h1>Product Management</h1>
                    <table class="table table-bordered table table-hover">
                      <thead>
                        <tr>
                          <th>Product name</th>
                          <th>Image</th>
                          <th>Description</th>
                          <th>Price</th>
                          <th>Color</th>
                          <th>Type</th>
                          <th>Edit</th>
                          <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($product as $product)
                        <tr>
                          <td>{!! $product["name"] !!}</td>
                          <td><img src="{{asset('Image/Product/'.$product->image)}}" alt="" width="40" height="40"/></td>
                          <td>{!! $product["description"] !!}</td>
                          <td>{!! ($product["promotion_price"])?$product["promotion_price"]:$product["unit_price"] !!}</td>
                          <td>
                            @foreach($color_products as $color)
                                @if($product["id_color"] == $color["id"])
                                 {{$color["name"]}}
                                 @endif
                             @endforeach
                          <td>
                             @foreach($type_products as $type_product)
                                @if($product["id_type"] == $type_product["id"])
                                 {{$type_product["name"]}}
                                 @endif
                             @endforeach
                          </td>
                          <td><a href="{!! url('edit',$product["id"]) !!}"><i class='fas'>&#xf044;</i></a></td>
                          <td><a href="{!! url('delete',$product["id"]) !!}"><i style='color:red' class='fas'>&#xf2ed;</i></a></td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                    <button type="button" class="btn btn-success"><a href="{!! url('insert') !!}"><i class='fas'>&#xf15c;</i> Add product</a></button>
                </div>
              </div>

          </div>
      </div>
      <script>
        var dropdown = document.getElementsByClassName("dropdown-btn");
        var i;

        for (i = 0; i < dropdown.length; i++) {
          dropdown[i].addEventListener("click", function() {
          this.classList.toggle("active");
          var dropdownContent = this.nextElementSibling;
          if (dropdownContent.style.display === "block") {
          dropdownContent.style.display = "none";
          } else {
          dropdownContent.style.display = "block";
          }
          });
        }
        </script>
      <footer class="sticky-top">
          <marquee>
              <p>Wedding Dress Shop</p>
          </marquee>
      </footer>

  </body>

  </html>
