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
    background-color: #ffae00;
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
  <a class="btn btn-sm btn-primary mb-5" href="/teacherprofile">Back</a><br>
  <br>
@if (count($crform)>0 )

<table>
  <thead>
    <tr>
      <th rowspan="3">Name</th>
      <th rowspan="3">Email</th>
      <th rowspan="3">Department</th>
      <th>Course Name</th>
      <th>course_code</th>
      <th>course_credit</th>
      <th>Types</th>
      <th>Action</th>
      
    </tr>
  </thead>
  @foreach ($crform as $key=> $items)
  <tbody>
    <tr>
      <td rowspan="100">{{ \App\User::where(['id' => $key])->pluck('name')->first() }}</td>
    <td rowspan="100">{{ \App\User::where(['id' => $key])->pluck('email')->first() }}</td>
    <td rowspan="100"> {{ \App\Department::where(['id' => $items[0]['course']['department_id']])->pluck('name')->first() }}</td>
      
      
    </tr>
    @foreach ($items as $item)
    <tr>

      <td>{{$item['course']['name']}}</td>
      <td>{{$item['course']['course_code']}}</td>
      <td>{{$item['course']['course_credit']}}</td>
      <td>@if ($item['types']==1)
        {{'Regular'}}
            
        @else
        {{'Drop'}}
            
        @endif</td>
     
      <td>
        @if ($item['status']==1)
      {{'Approve'}}
          
      @elseif($item['status']==0)
      <div class="row">
      <div class="col-md-6 text-left" style="float: left">
        <form action="{{route('approve-post', $item['id'])}}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('POST')
          <div>
              <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-arrow-right"></i>yes</button>
          </div> 
         
      </form>
      </div>
      <div class="col-md-6 text-left" style="float: right">
        <form action="{{route('not-approve', $item['id'])}}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('POST')
          <div>
              <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-arrow-right"></i>No</button>
          </div> 
         
      </form>
      </div>
      </div>
 
      
  @elseif($item['status']==2)
      {{'Not Approve'}}
    @endif
      </td>
    </tr>
    @endforeach
   
    
  </tbody>
  @endforeach
</table>
    
        
     
     
{{-- <table>
  <tr>
    <th rowspan="{{count($crform)}}">{{ \App\User::where(['id' => $crform[0]->user_id])->pluck('name')->first() }}</th>
    <th rowspan="{{count($crform)}}">{{ \App\User::where(['id' => $crform[0]->user_id])->pluck('email')->first() }}</th>
    <th rowspan="{{count($crform)}}"> {{ \App\Department::where(['id' =>$department_id])->pluck('name')->first() }}</th>
    
    <th>Course Title</th>
    <th>Course Code</th>
    <th>Credit</th>
    <th>Types</th>
    <th>Approve</th>
    
  </tr>
  
  @foreach ($crform as $item)
  @if (!is_null($item->course))
      
      
  
  

  <tr>
    

      <td>{{$item->course->name}}</td>
      <td>{{$item->course->course_code}}</td>
      <td>{{$item->course->course_credit}}</td>

      <td> 
        @if ($item->types==1)
        {{'Regular'}}
            
        @else
        {{'Drop'}}
            
        @endif</td>

    <td style="width: 100px">
      @if ($item->status==1)
      {{'Approve'}}
          
      @elseif($item->status==0)
      <div class="row">
      <div class="col-md-6 text-left" style="float: left">
        <form action="{{route('approve-post', $item->id)}}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('POST')
          <div>
              <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-arrow-right"></i>yes</button>
          </div> 
         
      </form>
      </div>
      <div class="col-md-6 text-left" style="float: right">
        <form action="{{route('not-approve', $item->id)}}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('POST')
          <div>
              <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-arrow-right"></i>No</button>
          </div> 
         
      </form>
      </div>
      </div>
 
      
  @elseif($item->status==2)
      {{'Not Approve'}}
    @endif
 
    </td>
    
  </tr>
  @endif
  @endforeach


  
</table> --}}
@endif 

</body>
</html>