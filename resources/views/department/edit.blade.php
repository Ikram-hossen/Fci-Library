@extends('admin.app')
@section('content')
    <div class="card p-3">
        <div class="card-body">
            <form action="{{route('admin.department.update', $department->id)}}" method="POST" role="form">
                @csrf
                <div class="row">
                  <div class="col-md-2"></div>
                  <div class="col-md-5">
                        <div class="form-group">
                            <input class="form-control" type="text"name="department_name" value="{{$department->department_name}}">
                        </div>
                  </div>
                   <div class="col-md-4">
                        <div class="form-group btn-container">
                            <button class="btn btn-primary text-light" type="submit"><i class="fa fa-sign-in fa-lg fa-fw"></i>Update</button>
                            <a href="{{route('admin.department.department-setup')}}" class="btn btn-secondary" type="submit"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>                        
                        </div>
                   </div>
                  <div class="col-md-2"></div>

                </div>
            </form>
        </div>
    </div>
@endsection