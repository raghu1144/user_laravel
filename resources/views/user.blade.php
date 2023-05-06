<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>User_register form</title>
    <style>
        div.form_div{
            /* position: absolute; */
            /* display: block; */
            /* margin-top: 50%; */
            /* margin-left: 50%; */
        }
    </style>
</head>
<body class="bg-info">
    <div class="container">
        <div class="form_div mt-3">
            <form action="{{$url}}" method="post" class="border bg-white rounded-1">
            @csrf   
            <div class="">
                    <h1 class="text-center bg-success bg-gradient text-white fs-5 p-4">{{$title}}</h1>
                </div>
                
                <div class="row mb-3 p-4">
                    <div class="col-lg-6 ">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" placeholder="Enter name" name="name" value="{{$employee_update->name}}">
                    </div>

                    <div class="col-lg-6 mb-3">
                        <label for="email">Email:</label>
                        <input type="text" class="form-control" placeholder="Enter email" name="email" value="{{$employee_update->email}}">
                    </div>

                    <div class="col-lg-6 mb-3">
                        <label for="email">Mobile:</label>
                        <input type="text" class="form-control" placeholder="Enter mobile" name="mobile" value="{{$employee_update->mobile}}">
                    </div>

                    <div class="col-lg-6 mb-3">
                        <label for="email">Department:</label>
                        <input type="text" class="form-control" placeholder="Enter department" name="department" value="{{$employee_update->department}}">
                    </div>


                    <div class="col-lg-12 mb-3">
                        <label for="email">Massege:</label>
                        <textarea class="form-control" rows="5" id="comment"  placeholder="Enter msg" name="msg">{{$employee_update->msg}}</textarea>
                    </div>

                    <div class="submit_button">
                        <button type="submit" class="btn btn-primary active">Click to Register</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>