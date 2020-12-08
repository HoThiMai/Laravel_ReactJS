
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
        
        background-image: url("{{asset('Image/background.jpg')}}");
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
                    <h2> ADD PRODUCT</h2>
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
                              <input type="text" class="form-control" name="tensanpham" id="inputName"  placeholder="Tên sản phẩm">
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="inputDescription" class="col-sm-4 col-form-label">Description</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" name="mota" id="inputDescription" placeholder="Mô tả">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputPrice" class="col-sm-4 col-form-label">Price</label>
                            <div class="col-sm-8">
                              <input type="number" class="form-control" name="gia" placeholder="Giá">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputColor" class="col-sm-4 col-form-label">Color</label>
                            <div class="col-sm-8">
                                <select class="form-control" name="mausac" >
                                    <option value="1">Light Beige</option>
                                    <option value="2">Red</option>
                                    <option value="3">Pastel Pink</option>
                                    <option value="4">White</option>
                                    <option value="5">Gray</option>
                                    <option value="6">Blue</option>
                                  </select>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputType" class="col-sm-4 col-form-label">Type</label>
                            <div class="col-sm-8">
                                <select class="form-control" name="loai" id="types">
                                    <option value="1">A-Line</option>
                                    <option value="2">Ball Grown</option>
                                    <option value="3">Mermaid</option>
                                    <option value="4">Drop Waist</option>
                                    <option value="5">Column</option>
                                  </select>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputImage" class="col-sm-4 col-form-label">Picture</label>
                            <div class="col-sm-8">
                                <input type="file" name="hinhanh" class="form-control-file" >
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
