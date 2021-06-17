@extends('layout.app')
@section('main_title','Category Edit')
@section('title','Category')
@section('content')
<form class="form form-horizontal" method="POST" action="{{ route('category.update',$data->id) }}">
    @csrf
    @method('PUT')
        <div class="d-flex justify-content-center">
            <div class="col-sm-4 w-75 py-5">
                <h6>New Category</h6>
                <input class="form-control form-control-lg" type="text"
                    placeholder="category" name="name" value="{{ old('name',$data->name) }}">
            </div>
        </div>
        <div class="col-12 d-flex justify-content-center">
            <button type="submit"
                class="btn btn-primary me-3 mb-1">Submit</button>
            <button type="reset"
                class="btn btn-light-secondary me-1 mb-1">Reset</button>
        </div>
</form>   
            

   
@endsection