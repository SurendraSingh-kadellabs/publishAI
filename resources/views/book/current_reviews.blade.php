@extends('layouts.layout1')
@section('page_title','Book')
@section('book_select','active')
@section('container')

<h3>Upload Book</h3>
<a href="{{route('book.index')}}">
    <button type="button" class="btn btn-primary my-3">Back</button>
</a>

<div class="card">
    <div class="card-body">
        <form action="{{route('book.store')}}" method="post">
            @csrf
            
            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label">File</label>
                <div class="col-sm-10">
                    <input type="file" name="file" class="form-control" id="staticEmail" value="">
                </div>
            </div>
            

            <div>
                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">Upload Book
                </button>
            </div>
        </form>
    </div>
</div>
@endsection