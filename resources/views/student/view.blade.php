@extends('admin.app')
@section('content')
<div class="card p-3">
<h2 class="text-primary">Student View Page</h2>
<hr>
<div style="text-align: right;">
    <h3><a href="{{ route('admin.student.show')}}" class="badge badge-primary">Back</a></h3>
</div>
   <ul>
     
            <li>Student Id : {{$students->id}}</li>
            <li>Student name : {{$students->student_name}}</li>
            <li>Father's name : {{$students->father_name}}</li>
            <li>Roll : {{$students->roll}}</th>
            <li>Registration : {{$students->registration}}</li>
            <li>Department : {{$students->department}}</li>
            <li>Shift : {{$students->shift}}</li>
            <li>Year : {{$students->year}}</li>
            <li>Gender : {{$students->gender}}</li>
      
   </ul>
</div>
@endsection