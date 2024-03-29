<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User-login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <div class="container border mt-3 ">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 position-absolute top-50 start-50 translate-middle shadow-lg p-3 mb-5 bg-body-tertiary rounded" style="margin-top:20px;">
                <h4 class="text-center">Dashboard</h4>
               <hr>
               <table class="table">
                <thead>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Student Id</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <td>{{$data->name}}</td>
                    <td>{{$data->email}}</td>
                    <td>{{$data->roll}}</td>
                    <td> <a href="Logout">Logout</a></td>
                </tbody>
               </table>

            </div>

        </div>

    </div>
    



   
</body>
 <!---JS-->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</html>