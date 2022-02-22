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
        table {
    background-color: #98c4cf;
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
    
  border: 1px solid #2d4a50;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
    background-color: #ecf0f1;
  
}

.btn-primary {
    color: #fff;
    background-color: #007bff;
    border-color: #007bff;
}
.btn {
    display: inline-block;
    font-weight: 400;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    border: 1px solid transparent;
    padding: .375rem .75rem;
    font-size: 1rem;
    line-height: 1.5;
    border-radius: .25rem;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
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
                <a class="nav-link" href="{{ URL::previous() }}">Back </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#">Hall Allotmeant<span class="sr-only">(current)</span></a
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
<br>
<br>

<table>
    
    <tr>
      
      <th>Hall</th>
      <th>Course Name</th>
      <th>Exam Date</th>
      <th>Exam Time</th>
    </tr>
    @foreach ($addteachershall as $item)
    <form method="get" action="{{Route('showte-hall')}}">
        @csrf
        <input type="hidden" value="{{$item->id}}" name="teacher-id"/>
    <tr>

      <td>{{ \App\Hall::where(['id'=>$item->hall_id])->first()->hall_number }}</td>
               <td> {{$item->exam_name}}</td>
               <td> {{$item->exam_date}}</td>
               <td> {{$item->exam_time}}</td>

      
    </tr>
    </form>
    
     @endforeach
  </table>

</body>

</html>