<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User-Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <div class="container border mt-3 ">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 position-absolute top-50 start-50 translate-middle shadow-lg p-3 mb-5 bg-body-tertiary rounded" style="margin-top:20px;">
                <h4 class="text-center">Registration</h4>
               
                <form action="{{route('registr-user')}}" method="post">
                    @if(Session::has('success'))
                    <div class="alert alert-success">{{Session::get('success')}}</div>
                    @endif
                    @if(Session::has('fail'))
                    <div class="alert alert-danger">{{Session::get('fail')}}</div>
                    @endif
                    @csrf
                    <!--1--->
                    <div class="form-group mt-3">
                        <label for="name">Full-Name</label>
                        <input type="text" class="form-control" placeholder="Enter Your Name" name="name" value="{{old('name')}}">
                        <span class="text-danger">@error('name') {{$message}} @enderror</span>
                    </div>
                    
                    <!--2--->
                    <div class="form-group mt-3">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" placeholder="Enter Your mail" name="email" value="{{old('email')}}">
                        <span class="text-danger">@error('email') {{$message}} @enderror</span>
                    </div>
                    
                    <!--6--->
                    <div class="form-group mt-3">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" placeholder="Enter Your mail" name="password" value="{{old('password')}}">
                        <span class="text-danger">@error('password') {{$message}} @enderror</span>
                    </div>
                    <!--3--->
                    <div class="form-group mt-3">
                        <label for="roll">Student ID</label>
                        <input type="text" class="form-control" placeholder="Enter Your Student-ID" name="roll" value="{{old('roll')}}">
                        <span class="text-danger">@error('roll') {{$message}} @enderror</span>
                    </div>
                    <!--4--->
                    <div class="form-group mt-3">
                        <label for="depf">Depf. Name</label>
                        <input type="text" class="form-control" placeholder="Enter Your Depf. Name" name="depf" value="{{old('depf')}}">
                        <span class="text-danger">@error('depf') {{$message}} @enderror</span>
                    </div>
                    <!--5--->
                    <div class="form-group mt-3">
                        <label for="contact">contact No</label>
                        <input type="text" class="form-control" placeholder="Enter Your contact" name="contact" value="{{old('contact')}}">
                        <span class="text-danger">@error('contact') {{$message}} @enderror</span>
                    </div>
                    <!--7--->
                    <div class="form-group mt-3">
                    <button type="Submit" class="btn btn-secondary">Submit-form</button>
                    
                    <a href="login">Login?</a>
                    </div>
                    

                </form>

            </div>

        </div>

    </div>
    



   
</body>
 <!---JS-->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</html>