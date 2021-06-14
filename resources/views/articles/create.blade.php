@extends('layout.app')
@section('main_title','Article Create')
@section('title','Article')
@section('content')
<div class="col-md-6 mb-4">
    <h6 class="ms-4">User_id</h6>
    <fieldset class="form-group ms-4">
        <select class="form-select" id="basicSelect">
            <option>IT</option>
            <option>Blade Runner</option>
            <option>Thor Ragnarok</option>
        </select>
    </fieldset>
</div>
<div class="col-md-6 mb-4">
    <h6 class="ms-4">Category_id</h6>
    <fieldset class="form-group ms-4">
        <select class="form-select" id="basicSelect">
            <option>IT</option>
            <option>Blade Runner</option>
            <option>Thor Ragnarok</option>
        </select>
    </fieldset>
</div>


<div class="form-group w-50 ms-4">
    <label for="basicInput">Title</label>
    <input type="text" class="form-control" id="basicInput"
        placeholder="Title">
</div>

<div class="card-body ms-3">
    <div class="form-group mb-3 w-75">
        <label for="exampleFormControlTextarea1" class="form-label">Content
            </label>
        <textarea class="form-control" id="exampleFormControlTextarea1"
            rows="3"></textarea>
    </div>
</div>


<div class="form-group w-50 ms-4">
    <label for="basicInput">Image</label>
    <input type="text" class="form-control" id="basicInput"
        placeholder="Image">
</div>

@endsection