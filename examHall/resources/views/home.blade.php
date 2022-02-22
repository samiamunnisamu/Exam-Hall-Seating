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
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        <div class="collapse navbar-collapse" id="navbarNav">


            <ul class="navbar-nav">
                @if (Auth::user()->rules==1)
      
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('viewst-profile')}}">Student<span class="sr-only">(current)</span></a>
            
          </li>
                @elseif(Auth::user()->rules==2)
                <li class="nav-item">
                    <a class="nav-link" href="{{route('viewte-profile')}}">Teacher<span class="sr-only">(current)</a>
                        </li>
          
                @else
                <li class="nav-item">
                    <a class="nav-link" href="{{route('admin-show')}}">Admin<span class="sr-only">(current)</a>
                        </li>
                    
                @endif

                


            </ul>
        </div>

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
    </nav>
    <div style="text-align: center;margin-top:10px;">
    <img style="width:180px;height:180px;" src="https://www.deardegree.com/images/15525813775c8a83017b4c3.jpg" alt="">
<h4 style="text-align: center;margin-top:2%;">{{ Auth::user()->name }}</h4>
<h1 style="text-align: center;margin-top:2%;">Welcome To Exam Hall Seating Allotment</h1>
    </div>



</body>

</html>