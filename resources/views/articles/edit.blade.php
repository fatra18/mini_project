@extends('layout.app')
@section('main_title','Article Create')
@section('title','Article')
@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form class="form form-horizontal" method="POST" action="{{ route('article.update',$data->id) }}">
    @csrf
    @method('PUT')
    <div class="col-md-6 mb-4">
        <h6 class="ms-4">User_id</h6>
        <fieldset class="form-group ms-4">
            <select class="form-select" id="basicSelect" name="user_id" type="text" id="category_id" value="{{ old('user_id') }}">
              @foreach ( $categories as $category )
              <option value="{{ $category->id}}">{{ $category->id }}</option>
              @endforeach
              {{-- <option value="1">1</option>
              <option value="2">2</option> --}}
            </select>
        </fieldset>
    </div>
    <div class="col-md-6 mb-4">
        <h6 class="ms-4">Category_id</h6>
        <fieldset class="form-group ms-4">
            <select class="form-select" id="basicSelect" name="category_id" type="text" id="category_id" value="{{ old('category_id') }}">
                @foreach ( $users as $user )
                <option value="{{ $user->id}}">{{ $user->id }}</option>
                @endforeach
                    {{-- <option value="1">1</option>
                    <option value="2">2</option> --}}
            </select>
        </fieldset>
    </div>


    <div class="form-group w-50 ms-4">
        <label for="basicInput">Title</label>
        <input type="text" class="form-control" id="basicInput" name="title" type="text"  value="{{ old('name',$data->title) }}"
            placeholder="Title">
    </div>

    <div class="card-body ms-3">
        <div class="form-group mb-3 w-75">
            <label for="exampleFormControlTextarea1" class="form-label">Content
                </label>
            <textarea class="form-control" id="exampleFormControlTextarea1" name="content" type="text"  value="{{ old('content',$data->content)}}"
                rows="3"></textarea>
        </div>
    </div>


    <div class="form-group w-50 ms-4">
        <label for="basicInput">Image</label>
        <input type="file" class="form-control" id="basicInput"name="image" type="text"  value="{{ old('image',$data->image) }}"
            placeholder="Image">
    </div>
    <div class="col-12 d-flex justify-content-center">
        <button type="submit"
            class="btn btn-primary me-3 mb-1">Submit</button>
        <button type="reset"
            class="btn btn-light-secondary me-1 mb-1">Reset</button>
    </div>
</form>   
    @endsection
