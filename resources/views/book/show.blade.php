@extends('admin.app')
@section('content')
<div class="card p-3">
<h3>Book List</h3>
<div style="text-align: right;">
    <h3><a href="{{ route('admin.book.create')}}" class="badge badge-primary">Add Book</a></h3>
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
            <th>Book Name</th>
            <th>Writer</th>
            <th>Publisher</th>
            <th>Language</th>
            <th>Total Items</th>
            <th>Book Details</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($books as $book)
            <tr>
                <td>{{$book->id}}</td>
                <td>{{$book->book_name}}</td>
                <td>{{$book->writer}}</td>
                <td>{{$book->publisher}}</td>
                <td>{{$book->language}}</td>
                <td>{{$book->total_items}}</td>
                <td>{{$book->book_details}}</td>
            
                <td width="20%">
                    <a href="{{route('admin.book.view', $book->id)}}"class="badge badge-info p-2 mb-1"><i class="fa fa-eye"></i></a>
                     <a href="{{route('admin.book.edit', $book->id)}}"class="badge badge-primary p-2 mb-1"><i class="fa fa-edit"></i></a>
                     
                    <a href="#deleteModal{{$book->id}}" data-toggle="modal" class="badge badge-danger p-2 mb-1"><i class="fa fa-trash"></i></a>
                    {{-- Modal Start --}}
                    <div class="modal fade" id="deleteModal{{$book->id}}">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Are you sure delete this Book ?</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                    </div>

                                    <div class="modal-footer">
                                        <form action="{{ route('admin.book.delete', $book->id) }}" method="POST">
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