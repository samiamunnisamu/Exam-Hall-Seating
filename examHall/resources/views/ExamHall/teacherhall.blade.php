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
      <th>Name</th>
      <th>Department</th>
      <th>Hall</th>
      <th>Course Name</th>
      <th>Exam Date</th>
      <th>Add</th>
    </tr>
    @foreach ($users as $item)
    <form method="post" action="{{Route('add-teacher')}}">
        @csrf
        <input type="hidden" value="{{$item->id}}" name="teacher-id"/>
    <tr>
      <td>{{ $item->name }}</td>
      <td> @if ($item->department==1)
          {{ 'CSE' }}
           
          @elseif($item->department==2)
          {{ 'BBA' }}
    
          @elseif($item->department==3)
          {{ 'LAW' }}
    
    
          @else
          {{ 'ENGLISH' }}
              
          @endif</td>

<td> 
    <div class="form-group col-md-6 p-2">
        <label for="hall">Hall Number</label>
        <select type="text" name="hall-number" class="form-control" id="hall" name="quantity"
                placeholder="Please enter hall number">
            @foreach ($halls as $item)
                <option value="{{$item->id}}">{{$item->hall_number}}</option>

            @endforeach
        </select>
    </div></td>

    <td>
        <div class="form-group col-md-6 p-2">
            <label for="exam-name">EXAM Name</label>
            <select type="number" name="exam-name" class="form-control" id="course"
                    name="quantity" placeholder="Please enter course name">
                @foreach ($exam as $item)
                    <option value="{{$item->id}}">{{$item->exam_name}}</option>
                @endforeach
            </select>

        </div>
    </td>

    <td>
        
        <div class="form-group col-md-6 p-2">
            <label for="exam-date">Exam Date</label>
                   <select type="number" name="exam-date" class="form-control" id="course"
                    name="quantity" placeholder="Please enter course name">
                @foreach ($exam as $item)
                    <option value="{{$item->id}}">{{ $item->exam_date}}</option>
                @endforeach
            </select>
        </div>
    </td>

   

      <td>
       
       <button type="submit" class="btn btn-primary btn-sm">Add</button>
      </td>
      
    </tr>
    </form>
     @endforeach
  </table>

</body>

</html>