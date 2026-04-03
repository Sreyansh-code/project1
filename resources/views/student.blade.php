<h1>Student Details</h1>
<hr>
@foreach($students as $student)
    <p>{{$student['id']}} -> {{$student['name']}} -> {{$student['course']}}</p>
@endforeach