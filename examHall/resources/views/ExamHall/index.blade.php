<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />

    <style>
       .bg-custom {
            background-color: #98c4cf;
        }
        
        .bg-card-custom {
            background: #b6a2d47a;
        }
        .bg-sa-ca {
            background: #149292;

        }
        
    </style>
</head>

<body>
    @if(session('success'))
    <h1>{{session('success')}}</h1>
@endif


    <nav class="navbar navbar-expand-lg navbar-dark bg-custom">
        <a class="navbar-brand p-2 bg-sa-ca " href="#">Exam Hall</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('admin-show')}}">Admin </a>
                        </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Department add <span class="sr-only">(current)</span></a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Semester Add</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Session Add</a>
                </li>
                <li class="nav-item">
                   
                    <a class="nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form  id="logout-form" action="{{ route('logout') }}" method="POST" >
                                        <div class="form-row bg-sa">
                                         @csrf
                                        </div>
                                       
                                    </form>
                </li>


            </ul>
        </div>
    </nav>

    <div class="container ">
        <div class="row">
            <div class="col-md-4">
                <div class="card mt-3 border-success">
                    <div class="card-body">
                        <h5 class="card-title ">Department Add</h5>
                        <hr />

                       
                        <form method="post" action="{{ Route('department-add')}}">
                            @csrf
                            <div class="form-group col-md-12">
                                <label for="department-name">Department name</label>
                                <input type="text" name="department-name" class="form-control " id="department-name" placeholder="Please enter department name" />
                            </div>

                            <div class="form-group col-md-12">
                                <button type="submit" class="btn btn-primary float-right">
                    Add
                  </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mt-3 border-success">
                    <div class="card-body">
                        <h5 class="card-title">Semester Add</h5>
                        <hr />

                        <form method="post" action="{{ Route('semester-add')}}">
                            @csrf
                            <div class="form-group col-md-12">
                                <label for="semester-name">Semester name</label>
                                <input type="text" name="semester-name" class="form-control" id="semester-name" placeholder="Please enter semester name" />
                            </div>

                            <div class="form-group col-md-12">
                                <button type="submit" class="btn btn-primary float-right">
                    Add
                  </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mt-3 border-success">
                    <div class="card-body">
                        <h5 class="card-title">Session Add</h5>
                        <hr />

                        <form method="post" action="{{Route('session-add')}}">
                            @csrf
                            <div class="form-group col-md-12">
                                <label for="session-name">Session name</label>
                                <input type="text" name="session-name" class="form-control" id="session-name" placeholder="Please enter session name" />
                            </div>

                            <div class="form-group col-md-12">
                                <button type="submit" class="btn btn-primary float-right">
                    Add
                  </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>