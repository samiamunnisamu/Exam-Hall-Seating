<!DOCTYPE html>
<html>
<head>
<style>
     
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
.btn-danger {
    color: #fff;
    background-color: #dc3545;
    border-color: #dc3545;
}
.bg-sa-ca {
            background: #149292;

        }
</style>
</head>
<body>

    
        <h2>Exam Hall</h2>
        <h3>Teacher Details</h3>

        <a class="btn btn-sm btn-primary mb-5" href="/admin">Back</a><br>
        <br>
<table>
    
  <tr>
    <th>Name</th>
    <th>E-mail Address</th>
    <th>Department</th>
    <th>Gender</th>
    <th>Phone</th>
    <th>CRUD</th>
  </tr>
  @foreach ($users as $item)

  <tr>
    <td>{{ $item->name }}</td>
    <td>{{ $item->email }}</td>
    
    <td> @if ($item->department==1)
        {{ 'CSE' }}
         
        @elseif($item->department==2)
        {{ 'BBA' }}
  
        @elseif($item->department==3)
        {{ 'LAW' }}
  
  
        @else
        {{ 'ENGLISH' }}
            
        @endif</td>
    <td>{{ $item->gender==1? "Male":"Female"}}</td>
    <td>{{ $item->phone }}</td>
    
    <td>
      @if($item->rules=2)
     <a href="{{route('teacher-edit',['id'=>$item->id])}}" class="btn btn-primary btn-sm">Edit</a>
     <a href="{{route('teacher-delete',['id'=>$item->id])}}" class="btn btn-danger btn-sm">Delete</a>
     
       @endif 
    </td>
    
  </tr>
  
   @endforeach
</table>

</body>
</html>