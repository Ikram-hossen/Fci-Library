@extends('admin.app')
@section('content')
<div class="card p-3">
<h3>Update Book</h3>
<div style="text-align: right;">
        <h3><a href="{{ route('admin.book.show')}}" class="badge badge-primary">Back</a></h3>
    </div>

   

<div class="">
    <form method="POST" action="{{ route('admin.book.update', $books->id) }}" role="form">
        @csrf
        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    <label class="control-label" for="book_name">Book Name</label>
                    <input class="form-control" type="text" id="book_name" name="book_name" value="{{$books->book_name}}" placeholder="Write book Name">
                </div>
                <div class="form-group">
                    <label class="control-label" for="writer">Writer</label>
                    <input class="form-control" type="text" id="writer" name="writer" value="{{$books->writer}}" placeholder="writer Name">
                </div>
                <div class="form-group">
                    <label class="control-label" for="publisher">Publisher</label>
                    <input class="form-control" type="text" id="publisher" name="publisher" value="{{$books->publisher}}" placeholder="publisher Name">
                </div>
                <div class="form-group">
                        <label for="language">Language</label>
                        <select class="form-control" id="language" name="language" value="{{$books->language}}">
                            <option value="bangla">Bangla</option>
                            <option value="english">English</option>
                            <option value="hindi">Hindi</option>
                            <option value="arabi">Arabi</option>
                        </select>
                    </div>
                <div class="form-group">
                    <label class="control-label" for="total_items">Total items</label>
                    <input class="form-control" type="number" id="total_items" name="total_items" value="{{$books->total_items}}" placeholder="total items">
                </div>
                
                <div class="form-group">
                    <label class="control-label" for="book_details">Book Details</label>
                    <textarea class="form-control" name="book_details" rows="4"  placeholder="Write book details" >{{$books->book_name}}</textarea>
                </div>
                <div class="form-group btn-container">
                    <button class="btn btn-primary btn-block" type="submit"><i class="fa fa-sign-in fa-lg fa-fw"></i>Update Book</button>
                </div>
            </div>
          </div>
    </form>
</div>
</div>
@endsection