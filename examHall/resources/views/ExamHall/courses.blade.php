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
                <li class="nav-item ">
                    <a class="nav-link" href="{{route('admin-show')}}">Back <span class="sr-only">(current)</span></a
            >
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#">Course add <span class="sr-only">(current)</span></a
    >
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

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-3 border-success">
                    <div class="card-body">
                        <h5 class="card-title">Course Add</h5>
                        <hr />

                        <form method="post" action="{{route('course-add')}}">
                            @csrf
                            <div class="form-row bg-sa">
                                <div class="form-group col-md-6">
                                    <label for="course-name">Course Name</label>
                                    <input type="text" name="course-name" class="form-control" id="Course-Name" placeholder="Please enter course name" required />
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="course-code">Course Code</label>
                                    <input type="text" name="course-code" class="form-control" id="Course-Code" placeholder="Please enter course code" required />
                                </div>
                            </div>


                                
                            
                            
                                <div class="form-row bg-sa">
                                    <div class="form-group col-md-6">
                                        <label for="department">Select department</label>
                                        <select name="dept-name" class="form-control" id="department">
                                            @foreach ($departments as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>

                                        @endforeach
                        </select>
                                    </div>
                            
                                    <div class="form-group col-md-6">
                                        <label for="course-credit">Course Credit</label>
                                        <input type="text" name="course-credit" class="form-control" id="Course-Credit" placeholder="Please enter course credit" required />
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