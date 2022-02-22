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
        .bg-sa {
            background: #c5dddd;

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
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="\home">Home</a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="#">Course Registration Form <span class="sr-only">(current)</span></a
                    >
                </li>
                <li class="nav-item">

                    <a class="nav-link" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        <div class="form-row bg-sa">
                            @csrf
                        </div>

                    </form>
                </li>


            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-3 border-success">
                    <div class="card-body">
                        <h4 class="card-title">North East University</h4>
                        <h5 class="card-title">Course Registration Form</h5>
                        <hr/>

                        <form method="post" action="{{route('crforms-add')}}">
                            @csrf
                            <div class="form-row bg-sa">
                                <div class="form-group col-md-6">
                                    <label for="taken-course">Taken Course</label>
                                    <select multiple type="text" name="taken-course[]" class="form-control" id="taken-course" placeholder="Please enter Course" required >
                                        @foreach ($courses as $item)
                                        <option value="{{$item->id}}">{{$item->name.'('.$item->course_code.')'}}</option>

                                        @endforeach

                                    </select>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="types">Select Types</label>
                                        <select name="types" class="form-control" id="types">
                             <option value="1">Regular</option>
                             <option value="2">Drop</option>
                                        </select>

                            </div>
                                    </div>


                            <div class="form-group col-md-6">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
