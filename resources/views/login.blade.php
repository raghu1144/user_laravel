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
    <title>User login form</title>
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
        <div class="form_div mt-3 bg-white" style="width: 40%; display: block; margin-left: 36%; margin-top: 50%;">
         
         <form action="{{url('/login_post')}}" method="post">
            @csrf   
            <div class="">
                    <h1 class="text-center bg-success bg-gradient text-white fs-5 p-4">User Login</h1>
                </div>
                
                <div class="row mb-3 p-4">
                    <!-- <div class="col-lg-12 ">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" placeholder="Enter name" name="name" >
                    </div> -->

                    <div class="col-lg-12mb-3">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" placeholder="Enter email" name="email" required>
                        
                    </div>

                    <div class="submit_button p-2">
                        <button type="submit" class="btn btn-primary active">Click to Login</button>
                    </div>
                    
                    <div class="about_link">
                        <a href="{{url('/user_register')}}">
                            if you don't have account please Register
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>