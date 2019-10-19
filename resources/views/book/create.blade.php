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
<h3>Add Book</h3>
<div style="text-align: right;">
        <h3><a href="{{ route('admin.book.show')}}" class="badge badge-primary">Back</a></h3>
    </div>
<div class="">
    <form action="{{route('admin.book.save')}}" method="POST" role="form">
        @csrf
        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    <label class="control-label" for="book_name">Book Name</label>
                    <input class="form-control" type="text" id="book_name" name="book_name" placeholder="Write book Name">
                </div>
                <div class="form-group">
                    <label class="control-label" for="writer">Writer</label>
                    <input class="form-control" type="text" id="writer" name="writer" placeholder="writer Name">
                </div>
                <div class="form-group">
                    <label class="control-label" for="publisher">Publisher</label>
                    <input class="form-control" type="text" id="publisher" name="publisher" placeholder="publisher Name">
                </div>
                <div class="form-group">
                        <label for="language">Language</label>
                        <select class="form-control" id="language" name="language">
                           <option value="bangla">Bangla</option>
                           <option value="english">English</option>
                           <option value="hindi">Hindi</option>
                           <option value="arabi">Arabi</option>
                       </select>
                    </div>
                <div class="form-group">
                    <label class="control-label" for="total_items">Total items</label>
                    <input class="form-control" type="number" id="total_items" name="total_items" placeholder="total items">
                </div>
                
                <div class="form-group">
                    <textarea class="form-control" name="book_details" rows="4" placeholder="Write book details">Book Details</textarea>
                </div>
                <div class="form-group btn-container">
                    <button class="btn btn-primary btn-block" type="submit"><i class="fa fa-sign-in fa-lg fa-fw"></i>Add Book</button>
                </div>
            </div>
        </div>
    </form>
</div>
</div>
@endsection