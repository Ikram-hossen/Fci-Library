@extends('admin.app')
@section('content')
<div class="card p-3">
<h2 class="text-primary">Book View Page</h2>
<hr>
<div style="text-align: right;">
    <h3><a href="{{ route('admin.book.show')}}" class="badge badge-primary">Back</a></h3>
</div>
   <ul>
     
            <li>Books Id : {{$books->id}}</li>
            <li>Books name : {{$books->book_name}}</li>
            <li>Writer : {{$books->writer}}</li>
            <li>Publisher : {{$books->publisher}}</th>
            <li>Language : {{$books->language}}</li>
            <li>Total Items : {{$books->total_items}}</li>
            <li>Book Details : {{$books->book_details}}</li>
   </ul>
</div>
@endsection