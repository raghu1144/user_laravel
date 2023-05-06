<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body class="bg-info">

    <div class="container mt-3">
        <h2 class="text-center bg-success text-white p-3">User Data
        </h2>
        <div class="bg-white p-2">
            <p class="text-black p-3">Hello, {{session('email')}}</p>
            <!-- <a class="btn btn-sm btn-primary" href="">Logout</a> -->
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a class="btn btn-sm btn-primary" href="{{'/logout'}}">Logout</a>
            </div>
        </div>
        
        <!-- <p>Combine .table-dark and .table-striped to create a dark, striped table:</p>             -->
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th class="text-primary">Firstname</th>
                    <th class="text-primary">Email</th>
                    <th class="text-primary">Mobile</th>
                    <th class="text-primary">Message</th>
                    <th class="text-primary">Department</th>
                    <th class="text-primary">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($employee_data as $employee_value)
                <tr>
                    <td>{{$employee_value->name}}</td>
                    <td>{{$employee_value->email}}</td>
                    <td>{{$employee_value->mobile}}</td>
                    <td>{{$employee_value->msg}}</td>
                    <td>{{$employee_value->department}}</td>
                    <td>
                        <div class="tex-center p-2">
                            <!-- <a href="{{url('/delete')}}/{{$employee_value->id}}"> -->
                            <a href="{{route('employee.delete', ['id' => $employee_value->id])}}">
                                <i class="bi bi-trash-fill text-danger bg-white p-2 rounded-2"></i>
                            </a>
                            <a href="{{route('employee.edit', ['id' => $employee_value->id])}}">
                                <i class="bi bi-pencil-square text-primary bg-white p-2 rounded-2"></i>
                            </a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>
