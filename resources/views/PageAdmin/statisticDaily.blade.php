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
                      <a href="{!! url('indexAdmin') !!}"><button class="tablinks">Product</button></a>
                      <hr/>
                      <a href="{!! url('OrderManagement') !!}"><button class="tablinks">Order</button></a>
                      <hr/>
                      <button class="dropdown-btn">Statistics 
                          <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-container">
                        <a href="{!! url('MonthlyChart') !!}"><button class="tablinks">Monthly </button></a>
                        <hr/>
                        <a href="{!! url('DailyChart') !!}"><button class="tablinks active">Daily </button></a>
                        <hr/>
                        </div>
                  </div>

              </div>    
              <div class="col-sm-10 text-left">  
                  <div id="daily" class="tabcontent">
                  <form action=""  method="post">
                    @csrf
                    <label for="birthday">Date:</label>
                    <input type="date" id="date" name="date">
                    <a href="{!! url('trangchuAdminpost') !!}"><input type="submit" value="OK"></a>
                  </form>
                    <h1>Products Booked For Rent On {!!date("d-m-Y", strtotime($date))!!}</h1>
                  <div id="piechart" class="piechart"></div>
                  </div>
              </div>
          </div>
          </div>
      </div>
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
      <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        
        var data = google.visualization.arrayToDataTable([
        <?php 
        echo "['Product', 'Quantity'],";
        foreach ($total_quantity as $total_quantity) {
          echo "['".$total_quantity["name"]."',".$total_quantity["total_quantity"]."],";
        }
        ?>
         ]);
      var options = {'width':700, 'height':500};
      var chart = new google.visualization.PieChart(document.getElementById('piechart'));
      chart.draw(data, options);
      
    }
    </script>
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
