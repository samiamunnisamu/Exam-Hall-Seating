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
                <li class="nav-item">
                    <a class="nav-link" href="{{route('admin-show')}}">Back </a>
                        </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Student Add <span class="sr-only">(current)</span></a
            >
          </li>
         

            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-3 border-success">
                    <div class="card-body">
                        <h5 class="card-title">Student Add</h5>
                        <hr />
                        
                        <form method="post" action="{{route('student-update')}}">
                            @csrf
                            <div class="form-row bg-sa">
                                <div class="form-group col-md-4">
                                    <label for="name">Name</label>
                                    <input type="text" value="{{$user->name}}" name="student-name" class="form-control" id="name" placeholder="Please enter name" required />
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="student-email">Email</label>
                                    <input type="email" value="{{$user->email}}" name="student-email" class="form-control" id="student-email" placeholder="Please enter a email" required />
                                </div>

                                
                            </div>

                            <div class="form-row bg-sa">
                                <div class="form-group col-md-6">
                                <label for="department" class="col-md-4 col-form-label text-md-right">Select Department</label>
                                
                                <select name="department" value="{{$user->department}}" class="form-control" id="department">
                     <option value="1">CSE</option>
                     <option value="2">BBA</option>
                     <option value="3">LAW</option>
                     <option value="4">English</option>
                                </select>                
                </select>
                            </div>

                                <div class="form-group col-md-6">
                                    <label for="gender">Select Gender</label>
                                    <select name="student-gender" value="{{$user->gender}}" class="form-control" id="gender">
                      <option value="1">Male</option>
                      <option value="2">Female</option>
                    </select>
                                </div>
                            </div>

                            <div class="form-row bg-sa">
                                <div class="form-group col-md-6">
                                    <label for="student-phone">Phone</label>
                                    <input type="number" value="{{$user->phone}}" name="student-phone" class="form-control" id="student-phone" placeholder="Please enter phone number" required />
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="student-image">Image</label>
                                    <input type="file" name="student-image" class="form-control" id="student-image" />
                                </div>
                            </div>

                            <div class="form-group col-md-6">
                                <input type="hidden" value="{{$user->id}}" name="id"/>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>