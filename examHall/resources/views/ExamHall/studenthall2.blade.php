<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Seat Arrange</title>

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
                <a class="nav-link" href="{{route('student-seat')}}">Back </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#">Seating Allotmeant<span class="sr-only">(current)</span></a
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
                    <h5 class="card-title">Seating</h5>
                    <hr/>
                   
                    <form method="post" action="{{Route('student-seating2')}}">
                        @csrf
    
                            <div class="form-row bg-sa">
                                <div class="form-group col-md-6 p-2">
                                    <label for="exam-start">EXAM Start Time</label>
                                    <input type="text"  value="{{ $exam->exam_start_time }}" name="exam-start" class="form-control" id="start-time"
                                           name="appt-time" readonly>
                                </div>
    
                                <div class="form-group col-md-6 p-2">
                                    <label for="exam-end">EXAM End Time</label>
                                    <input type="text" value="{{ $exam->exam_end_time }}" name="exam-end" class="form-control" id="end-time" name="appt-time" readonly
                                           >
                                </div>
                            </div>
    
                            <div class="form-row bg-sa">
                                <div class="form-group col-md-6 p-2">
                                    <label for="hall">Hall Number</label>
                                    <input type="text" value="{{App\Hall::where(['id'=>$exam->hall_id])->first()->hall_number }}" name="hall-number" class="form-control" id="end-time" name="appt-time" readonly
                                           >
                                           <input type="hidden" value="{{ $exam->hall_id }}" name="hall-number" class="form-control" id="end-time" name="appt-time" readonly
                                           >
                                </div>
    
                                <div class="form-group col-md-6 p-2">
                                    <label for="exam-date">Exam Date</label>
                                    <input type="text" value="{{ $exam->exam_date}}" name="exam-date" class="form-control" id="exam date"
                                           name="trip-start" readonly>
                                </div>


                            </div>
                            <div class="form-group col-md-6">
                                <button type="submit" class="btn btn-primary">Show</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>
