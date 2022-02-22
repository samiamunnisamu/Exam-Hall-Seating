<!DOCTYPE html>
<html>
<head>
<style>

table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  text-align: left;
  padding: 8px;
  font-family: arial, sans-serif;
  width: 100%;
}

tr:nth-child(even) {
    background-color: #98c4cf;
  
}

</style>


</head>
<body>
  
    
        <h2>Department of LAW-Course Offer List:Fall 2021</h2>
        <table style="width:100%">
         
         
          @foreach ($offercourses as $key=> $item)
          <tr>
            <th colspan="3">{{ $key }} semester</th>
            <tr>
              <td>Course Name</td>
              <td>Course Code</td>
              <td>Course Credit</td>
            </tr>
           
          </tr>
            @foreach ($item as $course)
            
            <tr>
              <td>{{ $course['course_name']}}</td>
              <td>{{ $course['course_code'] }}</td>
              <td>{{ $course['course_credit'] }}</td>
            </tr>
            @endforeach
          
          @endforeach
          
        
        </table>
      
</body>
</html>