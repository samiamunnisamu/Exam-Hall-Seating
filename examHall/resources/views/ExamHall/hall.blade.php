<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Document</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>

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
                <a class="nav-link" href="{{route('admin-show')}}">Admin </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#">Hall add <span class="sr-only">(current)</span></a
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
                    <h5 class="card-title">Hall Add</h5>
                    <hr/>

                    <form method="post" action="{{Route('hall-add')}}">
                        @csrf
                        <div class="form-row bg-sa">
                            <div class="form-group col-md-6">
                                <label for="hall-number">Hall Number</label>
                                <input type="text" name="hall-number" class="form-control" id="hall-number"
                                       placeholder="Please enter hall number" required/>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="hall-location">Location</label>
                                <input type="text" name="hall-location" class="form-control" id="Hall-Location"
                                       placeholder="Please enter hall location" required/>
                            </div>


                        </div>
                        <div class="form-row bg-sa">
                            <div class="form-group col-md-6">
                                <label for="total-sit">Total Sit</label>
                                <input type="text" name="hall-sit" class="form-control" id="Hall-total sit number"
                                       placeholder="Please enter total sit" required/>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="floor-number">Floor</label>
                                <input type="text" name="hall-floor" class="form-control" id="Hall-floor"
                                       placeholder="Please enter floor number" required/>
                            </div>
                        </div>

                        <div class="form-row bg-sa">
                            <div class="form-group col-md-6">
                                <label for="total-row">Total ROW</label>
                                <input type="text" name="total-row" class="form-control" id="Hall-total row number"
                                       placeholder="Please enter total row" required/>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="total-column">Total Column</label>
                                <input type="text" name="total-column" class="form-control" id="total-column"
                                       placeholder="Please enter total column" required/>
                            </div>
                        </div>

                </div>


                <div class="form-group col-md-6">
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</body>

</html>
