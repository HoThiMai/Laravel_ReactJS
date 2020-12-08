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
                        <a href="{!! url('MonthlyChart') !!}"><button class="tablinks active">Monthly </button></a>
                        <hr/>
                        <a href="{!! url('DailyChart') !!}"><button class="tablinks">Daily </button></a>
                        <hr/>
                        </div>
                  </div>

              </div>
              <div class="col-sm-10 text-left">
                  <div id="monthly" class="tabcontent">
                        <canvas id="myChart"></canvas>
                  </div>
              </div>

          </div>
      </div>
      <script>
        let myChart = document.getElementById('myChart').getContext('2d');
        Chart.defaults.global.defaultFontFamily = 'Lato';
        Chart.defaults.global.defaultFontSize = 15;
        Chart.defaults.global.defaultFontColor = '#777';

        <?php
          $num=[0,0,0,0,0,0,0,0,0,0,0,0];
          foreach($pro_month as $pro_month){
          for($i=0;$i<12;$i++){
            if($i==$pro_month["month"]){
              $num[$i-1]=$pro_month["sum"];
            }
            } 
          }            
         ?>
        let massPopChart = new Chart(myChart, {
          type:'bar', 
          data:{
            labels:['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
            datasets:[{
              label:'Quantity',
              data:<?php echo json_encode($num) ?> ,
              backgroundColor:[
                'rgba(255, 99, 132, 0.6)',
                'rgba(54, 162, 235, 0.6)',
                'rgba(255, 206, 86, 0.6)',
                'rgba(75, 192, 192, 0.6)',
                'rgba(153, 102, 255, 0.6)',
                'rgba(255, 159, 64, 0.6)',
                'rgba(127, 99, 132, 0.6)',
                'rgba(255, 30, 132, 0.6)',
                'rgba(94, 162, 235, 0.6)',
                'rgba(255, 206, 16, 0.6)',
                'rgba(11, 192, 22, 0.6)',
                'rgba(93, 122, 255, 0.6)',
                'rgba(115, 159, 64, 0.6)',
                'rgba(87, 99, 11, 0.6)'
              ],
              borderWidth:1,
              borderColor:'#777',
              hoverBorderWidth:3,
              hoverBorderColor:'#000'
            }]
          },
          options:{
            title:{
              display:true,
              text:'Number Of Rental Products Per Month',
              fontSize:20
            },
            legend:{
              display:true,
              position:'right',
              labels:{
                fontColor:'#000'
              }
            },
            layout:{
              padding:{
                left:50,
                right:0,
                bottom:0,
                top:0
              }
            },
            tooltips:{
              enabled:true
            }
          }
        });
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
