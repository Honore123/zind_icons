<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Admin</title>
</head>
<body>
    <div class="container">
        <div class="row" style="padding-top:200px;">
            <div class="col-md-4 col-md-offset-4 text-center" style="background-color:#636b6f;padding: 50px 20px 50px 20px;border-radius:5px;">
                @include('navbar.messages')
                <form action="{{url('/login')}}" method="GET">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="username" type="text" class="form-control" name="username" placeholder="Username">
                        </div>
                        <br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                        <br>
                        <button type="submit" class="btn col-md-12">Login</button>
                    </form>
            </div>
        </div>
    </div>
</body>
</html>