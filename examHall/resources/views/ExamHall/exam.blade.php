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
            <li class="nav-item ">
                <a class="nav-link active" href="#">Exam add <span class="sr-only">(current)</span></a>

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
                <div class="card-body ">
                    <h5 class="card-title">Exam Add</h5>
                    <hr/>

                    <form method="post" action="{{Route('exam-add')}}">
                        @csrf
                        <input type="hidden" name="dep-id" value="{{ $departmentId }}">
                        <div class="form-row bg-sa">
                            <div class="form-group col-md-6 p-2">
                                <label for="exam-name">EXAM Name</label>
                                <select type="number" name="course-name" class="form-control" id="course"
                                        name="quantity" placeholder="Please enter course name">
                                    @foreach ($courses as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>

                            </div>

                            <div class="form-group col-md-6 p-2">
                                <label for="course">Course Code</label>
                                <select type="number" name="course-code" class="form-control" id="course"
                                        name="quantity" placeholder="Please enter course code">
                                    @foreach ($courses as $item)
                                        <option value="{{$item->id}}">{{$item->course_code}}</option>

                                    @endforeach
                                </select>
                            </div>


                        </div>

                        <div class="form-row bg-sa">
                            <div class="form-group col-md-6 p-2">
                                <label for="exam-start">EXAM Start Time</label>
                                <input type="time" name="exam-start" class="form-control" id="start-time"
                                       name="appt-time" value="13:00">
                            </div>

                            <div class="form-group col-md-6 p-2">
                                <label for="exam-end">EXAM End Time</label>
                                <input type="time" name="exam-end" class="form-control" id="end-time" name="appt-time"
                                       value="23:00">
                            </div>
                        </div>

                        <div class="form-row bg-sa">
                            <div class="form-group col-md-6 p-2">
                                <label for="hall">Hall Number</label>
                                <select type="text" name="hall-number" class="form-control" id="hall" name="quantity"
                                        placeholder="Please enter hall number">
                                    @foreach ($halls as $item)
                                        <option value="{{$item->id}}">{{$item->hall_number}}</option>

                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group col-md-6 p-2">
                                <label for="exam-date">Exam Date</label>
                                <input type="date" name="exam-date" class="form-control" id="exam date"
                                       name="trip-start" value="2021-07-22">
                            </div>

                            <div class="form-group col-md-6 p-2">
                                <label for="semester">Semester</label>
                                <select type="text" name="semester" class="form-control" id="semester"
                                        placeholder="Please enter Semester">
                                    @foreach ($semester as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>


                            <div class="form-group col-md-6 p-2">
                                <label for="total-stu">Total Student</label>
                                <input type="text"
                                       name="total-stu"
                                       class="form-control" id="total-stu"
                                       placeholder="Please enter total student" required/>
                            </div>

                            <div class="form-group col-md-6 p-2">
                                <button type="submit" class="btn btn-primary ml-1">Add Exam</button>
                            </div>


                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

</html>
