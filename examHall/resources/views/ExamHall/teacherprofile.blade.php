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
                <li class="nav-item active">
                    <a class="nav-link" href="#">View Profile <span class="sr-only">(current)</span></a
            >
          </li>
          

          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">View Offer Course</a>
            <div class="dropdown-menu">
                
                <a href="{{route('course-cse')}}" class="dropdown-item">CSE</a>
                <a href="{{route('course-bba')}}" class="dropdown-item">BBA</a>
                <a href="{{route('course-law')}}" class="dropdown-item">LAW</a>
                <a href="{{route('course-english')}}" class="dropdown-item">English</a>
            </div>       
        </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{route('regform-view')}}">View Student Course Registration Form </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{route('showte-hall')}}">View Exam Hall</a>
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
            </nav>


                <div class="container ">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card mt-3 border-success">
                                <div class="card-body">
                                    <h5 class="card-title ">Your Profile</h5>
                                    <hr />
                                    
                                    <form>
                                        @csrf
                                        <div class="form-row bg-sa">
                                            <div class="form-group col-md-4">
                                                <label for="name">Name</label>
                                                <input type="text" value="{{ $users->name }}" name="teacher-name" class="form-control" id="name" required />
                                                
                                            </div>
                                        </div>
            
                                            

                                         <div class="form-row bg-sa">
                                            <div class="form-group col-md-4">
                                                <label for="teacher-email">E-mail Address</label>
                                                <input type="email" value="{{ $users->email }}"  name="teacher-email" class="form-control" id="student-email" required />
                                            </div>
                                         </div>
                                        
            
                                         <div class="form-row bg-sa">
                                            <div class="form-group col-md-6">
                                                <label for="department">Department</label>
                                                @if ($users->department==1)
                                                <input value="CSE"  name="teacher-department" class="form-control" id="department" />
         
        @elseif($users->department==2)
        <input value="BBA"  name="teacher-department" class="form-control" id="department" />
  
        @elseif($users->department==3)
        <input value="LAW"  name="teacher-department" class="form-control" id="department" />
  
  
        @else
        <input value="English"  name="teacher-department" class="form-control" id="department" />
            
        @endif
                                                
                                            
                               
                                            </div>
                                         </div>
            
                                       
                                         <div class="form-row bg-sa">
                                            <div class="form-group col-md-6">
                                                <label for="gender">Gender</label>
                                                <input value="{{ $users->gender==1? "Male":"Female"}}"  name="teacher-gender" class="form-control" id="gender"/>
                                                     
                                
                                            </div>
                                         </div>
                                        
                                        
            
                                         <div class="form-row bg-sa">
                                            <div class="form-group col-md-6">
                                                <label for="teacher-phone">Phone</label>
                                                <input type="number" value="{{ $users->phone }}"  name="teacher-phone" class="form-control" id="student-phone" required />
                                                
                                            </div>
                                        </div>
                                    
            
                                        <div class="form-group col-md-6">
                                            @if($users->rules=2)
     <a href="{{route('editte-profile',['id'=>$users->id])}}" class="btn btn-primary btn-sm">Edit</a>
    
     
       @endif
                                           
                                        </div>  
                                       
            
                                        
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </ul>
        </div>

        
    </nav>

</body>
</html>