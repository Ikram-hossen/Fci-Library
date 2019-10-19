@extends('admin.app')
@section('content')
<div class="card p-3">
        @if (Session::has('success'))
        <div class="alert alert-success">
             <p>{{ Session::get('success')}}</p>
        </div>
     @endif
        @if($errors->any())
        <div class="alert alert-danger">
            <a type="button" class="close btn btn-light text-danger" data-dismiss="alert">
                <span >&times;</span>
            </a>
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
<h3>Add Student</h3>
<div style="text-align: right;">
        <h3><a href="{{ route('admin.student.show')}}" class="badge badge-primary">Back</a></h3>
    </div>
<div class="">
    <form action="{{route('admin.student.save')}}" method="POST" role="form">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label" for="student_name">Student Name</label>
                    <input class="form-control" type="text" id="student_name" name="student_name" placeholder="Write Student Name">
                </div>
                <div class="form-group">
                        <label class="control-label" for="f_name">Father's Name</label>
                        <input class="form-control" type="text" id="f_name" name="father_name" placeholder="Write Father's Name">
                    </div>
                <div class="form-group">
                    <label class="control-label" for="roll">Roll</label>
                    <input class="form-control" type="number" id="roll" name="roll" placeholder="Roll No">
                </div>
                
                <div class="form-group">
                    <label class="control-label" for="registration">Registration</label>
                    <input class="form-control" type="number" id="registration" name="registration" placeholder="Registration No">
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
                    <select class="form-control" id="shift" name="shift">
                       <option value="1st Shift">1st Shift</option>
                       <option value="2nd Shift">2nd Shift</option>
                   </select>
                </div>
                <div class="form-group">
                    <label for="year">Year</label>
                    <select class="form-control" id="year" name="year">
                       <option value="1st year">1st year</option>
                       <option value="2nd year">2nd year</option>
                       <option value="3rd year">3rd year</option>
                       <option value="final year">final year</option>
                   </select>
                </div>
                <div class="form-group">
                    <label for="gender">Gender</label>
                    <select class="form-control" id="gender" name="gender">
                       <option value="male">Male</option>
                       <option value="female">Female</option>
                   </select>
                </div>
               
            </div>
        </div>
        
        <div class="form-group btn-container">
            <button class="btn btn-primary btn-block" type="submit"><i class="fa fa-sign-in fa-lg fa-fw"></i>Add Student</button>
        </div>
    </form>
</div>
</div>
@endsection