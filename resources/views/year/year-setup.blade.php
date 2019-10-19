@extends('admin.app')
@section('content')
    <div class="card p-3">
        <div class="card-header">
           <div class="row">
               <div class="col-md-2"> <h5>Year</h5></div>
               <div class="col-md-10">
                   {{-- show flash message --}}
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
               </div>
           </div>
        </div>
        <div class="card-body">
            {{-- create form --}}
            <form action="{{route('admin.year.save')}}" method="POST" role="form">
                @csrf
                <div class="row">
                  <div class="col-md-2"></div>
                  <div class="col-md-6 ml-auto">
                        <div class="form-group">
                            <input class="form-control" type="text"name="year_name" placeholder="Add New Year">
                        </div>
                  </div>
                   <div class="col-md-2 m-auto">
                        <div class="form-group btn-container">
                            <button class="btn btn-primary btn-block" type="submit"><i class="fa fa-sign-in fa-lg fa-fw"></i>Save</button>
                        </div>
                   </div>
                   <div class="col-md-2"></div>
                </div>
            </form>

            {{-- table --}}
            <table class="table table-bordered mt-3"> {{--id="sampleTable"--}}
                <thead>
                    <tr>
                        <th>S/L</th>
                        <th>Year Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                   @foreach ($year as $years)
                    <tr>
                        <td>{{$years->id}}</td>
                        <td>{{$years->year_name}}</td>
                        <td>
                            <a href="{{route('admin.year.edit', $years->id)}}"class="badge badge-primary p-2 mb-1"><i class="fa fa-edit"></i> Edit</a> 
                            <a href="#deleteModal{{$years->id}}" data-toggle="modal" class="badge badge-danger p-2 mb-1"><i class="fa fa-trash"></i> Delete</a>
                            {{-- Modal Start --}}
                            <div class="modal fade" id="deleteModal{{$years->id}}">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Are you sure ?</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body py-3">
                                                <h5 class="modal-title">You want to delete this Year.</h5>
                                            </div>
        
                                            <div class="modal-footer">
                                               <form action="{{route('admin.year.delete', $years->id)}}" method="POST">
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
    </div>
@endsection