@extends('admin.app')
@section('content')
<div class="card p-3">
<h3>Student List</h3>
<div style="text-align: right;">
    <h3><a href="{{ route('admin.student.create')}}" class="badge badge-primary">Add Student</a></h3>
</div>
@if (Session::has('success'))
<div class="alert alert-success">
    <p>{{ Session::get('success')}}</p>
</div>
@endif
<table class="table table-bordered" id="sampleTable">
    <thead>
        <tr>
            <th>Id</th>
            <th>S_name</th>
            <th>F_name</th>
            <th>Roll</th>
            <th>Registration</th>
            <th>Department</th>
            <th>Shift</th>
            <th>Year</th>
            <th>Gender</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($students as $student)
            <tr>
                <td>{{$student->id}}</td>
                <td>{{$student->student_name}}</td>
                <td>{{$student->father_name}}</td>
                <td>{{$student->roll}}</td>
                <td>{{$student->registration}}</td>
                <td>{{$student->department}}</td>
                <td>{{$student->shift}}</td>
                <td>{{$student->year}}</td>
                <td>{{$student->gender}}</td>
                <td width="20%">
                    <a href="{{route('admin.student.view', $student->id)}}"class="badge badge-info p-2 mb-1"><i class="fa fa-eye"></i></a>
                     <a href="{{route('admin.student.edit', $student->id)}}"class="badge badge-primary p-2 mb-1"><i class="fa fa-edit"></i></a>
                     
                    <a href="#deleteModal{{$student->id}}" data-toggle="modal" class="badge badge-danger p-2 mb-1"><i class="fa fa-trash"></i></a>
                    {{-- Modal Start --}}
                    <div class="modal fade" id="deleteModal{{$student->id}}">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Are you sure delete this Student ?</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                    </div>

                                    <div class="modal-footer">
                                        <form action="{{ route('admin.student.delete', $student->id) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Yes</button>
                                            <button type="submit" class="btn btn-secondary" data-dismiss="modal">No</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    {{-- Modal End --}}

                    </td>
              
            </tr>
        @endforeach
    </tbody>
</table>

</div>
@endsection