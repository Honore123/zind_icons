<!DOCTYPE html>
<html lang="en" style="height:100%">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>
<body style="height:100%;">
        <nav class="navbar navbar-default">
                <div class="container-fluid">
                  <div class="navbar-header">
                    <a class="navbar-brand" href="#">ZIND/ICONS</a>
                  </div>
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Settings</a></li>
                    <li><a href="/logout">Logout</a></li>
                  </ul>
                </div>
              </nav>
    <div class="container-fluid" style="background-color:white;height:100%;">
        <div class="row" style="height:100%;">
                <div class="list-group col-md-3" style="padding-right:0px;height:100%;background-color:#4E00A8;margin-bottom:0px;">
                        <a href="/upload" class="list-group-item" style="border-radius:0px;">Dashboard</a>
                        <a href="/icons" class="list-group-item">Icons</a>
                        <a href="#" class="list-group-item" style="border-radius:0px;">Feedbacks</a>
                      </div>
                <div class="col-md-9" style="height:100%;">
                    @include('navbar.messages')
                    @yield('contentAdmin')
                </div>
            </div>
        </div>
    </div>
</body>
</html>