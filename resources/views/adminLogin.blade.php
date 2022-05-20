<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-6 mx-auto">
            <br><br><br>
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Admin Login</h6>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('admin.login')}}">
                        @csrf
                        <div class="form-group">
                            <input class="form-control" type="email" name="email" placeholder="Enter Email">
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="password" name="password" placeholder="Enter Password">
                        </div>
                        <div>
                            <button class="btn btn-primary btn-block- float-right">Admin Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>