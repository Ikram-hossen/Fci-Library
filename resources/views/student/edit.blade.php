@extends('admin.app')
@section('content')
<div class="card p-3">
<h3>Update Student</h3>
<div style="text-align: right;">
        <h3><a href="{{ route('admin.student.show')}}" class="badge badge-primary">Back</a></h3>
    </div>

   

<div class="">
    <form method="POST" action="{{ route('admin.student.update', $students->id) }}" role="form">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label" for="student_name">Student Name</label>
                    <input class="form-control" type="text" id="student_name" name="student_name" value="{{$students->student_name}}" >
                </div>
                <div class="form-group">
                        <label class="control-label" for="f_name">Father's Name</label>
                        <input class="form-control" type="text" id="f_name" name="father_name" value="{{$students->father_name}}" >
                    </div>
                <div class="form-group">
                    <label class="control-label" for="roll">Roll</label>
                    <input class="form-control" type="number" id="roll" name="roll" value="{{$students->roll}}" >
                </div>
                
                <div class="form-group">
                    <label class="control-label" for="registration">Registration</label>
                    <input class="form-control" type="number" id="registration" name="registration" value="{{$students->registration}}" >
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="dept">Department</label>
                    <select class="form-control" id="dept" name="department">
                       <option value="CST">CST</option>
                       <option value="DTNT">DTNT</option>
                       <option value="TCT">TCT</option>
                   </select>
                </div>
                <div class="form-group">
                    <label for="shift">Shift</label>
                    <select class="form-control" id="shift" name="shift" value="{{$students->shift}}">
                       <option value="1st Shift">1st Shift</option>
                       <option value="2nd Shift">2nd Shift</option>
                   </select>
                </div>
                <div class="form-group">
                    <label for="year">Year</label>
                    <select class="form-control" id="year" name="year" value="{{$students->year}}">
                       <option value="1st year">1st year</option>
                       <option value="2nd year">2nd year</option>
                       <option value="3rd year">3rd year</option>
                       <option value="final year">final year</option>
                   </select>
                </div>
                <div class="form-group">
                    <label for="gender">Gender</label>
                    <select class="form-control" id="year" name="gender" value="{{$students->gender}}">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                   
                </div>
               
            </div>
        </div>
        
        <div class="form-group btn-container">
            <button class="btn btn-primary btn-block" type="submit"><i class="fa fa-sign-in fa-lg fa-fw"></i>Update Student</button>
        </div>
    </form>
</div>
</div>
@endsection