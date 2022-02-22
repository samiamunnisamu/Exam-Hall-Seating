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
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('admin-show')}}">Back<span class="sr-only">(current)</span></a
            >
          </li>
          
            </ul>
        </div>
    </nav>

    <div class="container ">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-2 mt-4">
                <div class="card border-success ">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <h4 class="text-center text-success">Department</h4>
                                <h2 class="text-center">7</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-2 mt-4">
                <div class="card border-success">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <h4 class="text-center text-success">Teacher</h4>
                                <h2 class="text-center">50</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-2 mt-4">
                <div class="card border-success">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <h4 class="text-center text-success">Student</h4>
                                <h2 class="text-center">220</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>