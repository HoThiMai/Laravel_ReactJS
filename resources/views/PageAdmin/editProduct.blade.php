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
    background-image: url(./public/Image/background.jpg);
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
    background-image: url(./public/Image/background1.jpg);
    background: linear-gradient(white, #243b55);
    background-size: cover;
    margin-top: 100px;
    font-weight: bold;
    }
    .note
{
    text-align: center;
    background: darkred;
    color: #fff;
    font-weight: bold;

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
.btnSubmit
{
    border:none;
    border-radius:1.5rem;
    padding: 1%;
    width: 20%;
    cursor: pointer;
    background: darkred;
    color: #fff;
}
</style>
</head>
<body>
<!------ Include the above in your HEAD tag ---------->
<div class="container register-form">
            <div class="form">
                <div class="note">
                    <h2>EDIT PRODUCT INFORMATION</h2>
                </div>
                <form action="" method="post" enctype="multipart/form-data">
                    @csrf
                    <div>
                        @include('error')
                    </div>
                <div class="form-content">
                    <div class="modal-body mx-3">

                        <div class="form-group row">
                            <label for="inputName" class="col-sm-4 col-form-label">Product name</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" name="tensanpham" id="inputName" value="{{ $product["name"] }}" placeholder="Tên sản phẩm">
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="inputDescription" class="col-sm-4 col-form-label">Description</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" name="mota" id="inputDescription" value="{{ $product["description"] }}" placeholder="Mô tả">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputPrice" class="col-sm-4 col-form-label">Price</label>
                            <div class="col-sm-8">
                              <input type="number" class="form-control" name="gia" value="{{ $product["unit_price"] }}" placeholder="Giá">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputColor" class="col-sm-4 col-form-label">Color</label>
                            <div class="col-sm-8">
                                <select class="form-control" name="mausac" >
                                  @for($i=1;$i<7;$i++)
                                    @if($i==$product->id_color)
                                    <option value="{{$i}}" selected>
                                      @if($i==1)
                                      Light Beige
                                      @elseif ($i==2)
                                      Red
                                      @elseif ($i==3)
                                      Pastel Pink
                                      @elseif ($i==4)
                                      White
                                      @elseif ($i==5)
                                      Gray
                                      @elseif ($i==6)
                                      Blue
                                      @endif
                                    </option>
                                    @else
                                    <option value="{{$i}}">
                                      @if($i==1)
                                      Light Beige
                                      @elseif ($i==2)
                                      Red
                                      @elseif ($i==3)
                                      Pastel Pink
                                      @elseif ($i==4)
                                      White
                                      @elseif ($i==5)
                                      Gray
                                      @elseif ($i==6)
                                      Blue
                                      @endif
                                    </option>
                                    @endif
                                  @endfor
                                    
                                  </select>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputType" class="col-sm-4 col-form-label">Type</label>
                            <div class="col-sm-8">
                                <select class="form-control" name="loai" id="types">
                                @for($i=1;$i<6;$i++)
                                    @if($i==$product->id_type)
                                    <option value="{{$i}}" selected>
                                      @if($i==1)
                                      A-Line
                                      @elseif ($i==2)
                                      Ball Grown
                                      @elseif ($i==3)
                                     Mermaid
                                      @elseif ($i==4)
                                     Drop Waist
                                      @elseif ($i==5)
                                     Column
                                      @endif
                                    </option>
                                    @else
                                    <option value="{{$i}}">
                                    @if($i==1)
                                      A-Line
                                      @elseif ($i==2)
                                      Ball Grown
                                      @elseif ($i==3)
                                     Mermaid
                                      @elseif ($i==4)
                                    Drop Waist
                                      @elseif ($i==5)
                                      Column
                                      @endif
                                    </option>
                                    @endif
                                  @endfor
                                   
                                  </select>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputImage" class="col-sm-4 col-form-label">Image</label>
                            <div class="col-sm-8">
                            <img src="{{asset('Image/Product/'.$product->image)}}" alt="" width="40" height="40"/>
                              <input type="file" class="form-control-file" name="hinhanh"  value="{{ $product["image"] }}">
                            </div>
                          </div>
                    </div>


                    <div class="modal-footer d-flex justify-content-center">
                        <button class="btnSubmit">Submit</button>
                    </div>
                </div>
                </form>
            </div>
            </div>
</body>
</html>