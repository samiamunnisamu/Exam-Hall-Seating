<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />  
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Document</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    

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
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link" href="\home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('user-view')}}">User Verify</a>
                        </li>
                <li class="nav-item ">
                    <a class="nav-link" href="{{route('student-view')}}">Student Add <span class="sr-only">(current)</span></a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('teacher-view')}}">Teacher Add</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{route('viewte-details')}}">Teacher Details</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{route('viewst-details')}}">Student Details</a>
                </li>

                
                <li class="nav-item">
                    <a class="nav-link" href="{{route('exam-view')}}">Exam Add</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{route('hall-view')}}">Hall Add</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{route('course-view')}}">Course Add</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{route('settings')}}">Department Add</a>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">View Offer Course</a>
                    <div class="dropdown-menu">
                        <a href="{{route('course-cse')}}" class="dropdown-item">CSE</a>
                        <a href="{{route('course-bba')}}" class="dropdown-item">BBA</a>
                        <a href="{{route('course-law')}}" class="dropdown-item">LAW</a>
                        <a href="{{route('course-english')}}" class="dropdown-item">English</a>
                        
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{route('seat-plan')}}">Exam Seat Allotment</a>
                </li>
                
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Teacher Hall</a>
                    <div class="dropdown-menu">
                        <a href="{{route('teacher-hall')}}" class="dropdown-item">Add Teacher Hall</a>
                        <a href="{{route('viewte-halldetails')}}" class="dropdown-item">Show Hall Details</a>
                        
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